<?php

function getRecipientsForProgram($program)
{

    include 'dbconnect.php';
    $studentIDs = [];
    $phoneNumbers = [];
    $sql = "SELECT student_id, mobile_number FROM tbl_student WHERE student_course = '$program'";
    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Fetch the results and add them to the $recipients array
        while ($row = $result->fetch_assoc()) {
            $studentIDs[] = $row['student_id'];
            $phoneNumbers[] = $row['mobile_numberr'];
        }
    }

    // Return the array of recipients
    return ['studentIDs' => $studentIDs, 'phoneNumbers' => $phoneNumbers];
}
?>