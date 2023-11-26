<?php

use Infobip\Api\SmsApi;
use Infobip\Configuration;
use Infobip\Model\SmsAdvancedTextualRequest;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;


require __DIR__ . '/../vendor/autoload.php';
include "db_connection.php";


$BASE_URL = "ggd1mj.api.infobip.com";
$API_KEY = "e7b1180b729ec5f0593b0336ae419c0c-87dcc98e-7137-4cc1-aa16-41a74e53e2e8";

$SENDER = "Admin";


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["groupsmsForm"])) {
        echo "here";
        $program = isset($_POST['course']) ? $_POST['course'] : '';

        $studentIDs = [];
        $phoneNumbers = [];

        $sql = "SELECT student_id, mobile_number FROM tbl_student WHERE student_course = '$program'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $studentIDs[] = $row['student_id'];
                $phoneNumbers[] = $row['mobile_number'];
            }
        }

        // Set $sid and $RECIPIENTS to the retrieved values
        $sid = implode(",", $studentIDs);
        $RECIPIENTS = $phoneNumbers;
        $MESSAGE_TEXT = isset($_POST['groupmessage']) ? $_POST['groupmessage'] : '';

    } else {
        $sid = isset($_POST['studentId']) ? $_POST['studentId'] : '';
        $RECIPIENTS = isset($_POST['phoneNumber']) ? explode(",", $_POST['phoneNumber']) : [];
        $MESSAGE_TEXT = isset($_POST['message']) ? $_POST['message'] : '';
    }

    $configuration = new Configuration(host: $BASE_URL, apiKey: $API_KEY);

    $sendSmsApi = new SmsApi(config: $configuration);

    $currentDate = date("Y-m-d H:i:s");
    try {
        foreach ($RECIPIENTS as $RECIPIENT) {
            $RECIPIENT = trim($RECIPIENT);
            if (!empty($RECIPIENT)) {
                // Save to the database
                $sql = "INSERT INTO messagetbl (studentID, msg, stat, dateDelivered) VALUES ('$sid','$MESSAGE_TEXT','Pending', '$currentDate')";
                $insertResult = $conn->query($sql);

                if ($insertResult) {
                    // send sms if insert to db is successful
                    $destination = new SmsDestination(to: $RECIPIENT);

                    $message = new SmsTextualMessage(
                        destinations: [$destination],
                        from: $SENDER,
                        text: $MESSAGE_TEXT
                    );

                    $request = new SmsAdvancedTextualRequest(messages: [$message]);

                    $smsResponse = $sendSmsApi->sendSmsMessage($request);

                    echo 'Bulk ID: ' . $smsResponse->getBulkId() . PHP_EOL;

                    foreach ($smsResponse->getMessages() ?? [] as $message) {
                        $messageId = $message->getMessageId();
                        $status = $message->getStatus()?->getName();

                        $successMessages[] = sprintf('Message ID: %s, status: %s', $messageId, $status);

                        // Update the status in db
                        $sqlUpdate = "UPDATE messagetbl SET stat='Delivered' WHERE studentID='$sid' AND msg='$MESSAGE_TEXT'";
                        $conn->query($sqlUpdate);
                    }
                }
            }
        }
        //success msg mf
        echo "<script>";
        echo "var successMessages = " . json_encode($successMessages) . ";";
        echo "if (successMessages.length > 0) {";
        echo "  var alertMessage = 'SMS sent successfully:\\n' + successMessages.join('\\n');";
        echo "  alert(alertMessage);";
        echo "  window.location.href = 'index.php';";
        echo "}";
        echo "</script>";
    } catch (Throwable $apiException) {
        echo "<script>";
        echo "alert('Error sending SMS. HTTP Code: " . $apiException->getCode() . "');";
        echo "</script>";

    }
}
?>