<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Sending SMS</title>

</head>

<body>


    <div class="container">
        <h2>Student Contacts</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Program</th>
                    <th>Phone Number</th>
                    <th>Year Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'modal.php';
                include 'fetchdata.php';

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['student_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['student_fname']; ?>
                            </td>
                            <td>
                                <?php echo $row['student_lname']; ?>
                            </td>
                            <td>
                                <?php echo $row['student_course']; ?>
                            </td>
                            <td>
                                <?php echo $row['mobile_number']; ?>
                            </td>
                            <td>
                                <?php echo $row['student_yearrlevel']; ?>
                            </td>
                            <td><button type="button" class="btn btn-primary open-sms-modal"
                                    data-studentid="<?php echo $row['student_id']; ?>"
                                    data-phonenumber="<?php echo $row['mobile_number']; ?>">
                                    Open SMS Modal
                                </button>
                                <button type="button" class="btn btn-primary open-message">
                                    View Message
                                </button>
                            </td>
                            <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>No data found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary open-groupsms-modal">
            Group Message
        </button>
    </div>


    <div class="container">
        <h2>Messages</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Student</th>
                    <th>Message</th>
                    <th>Stat</th>
                    <th>Date</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include 'fetchdata.php';

                if ($result->num_rows > 0) {
                    while ($row = $result_messages->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['studentID'] . "</td>";
                        echo "<td>" . $row['msg'] . "</td>";
                        echo "<td>" . $row['stat'] . "</td>";
                        $dateDelivered = isset($row['dateDelivered']) ? date("F j, Y", strtotime($row['dateDelivered'])) : '';
                        echo "<td>" . $dateDelivered . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data found</td></tr>";
                }

                $conn->close();
                ?>

            </tbody>
        </table>
    </div>

</body>
<script>
    $(document).ready(function () {
        // Open smsModal
        $('.open-sms-modal').click(function () {
            // Gety student ID and phone num
            var studentID = $(this).data('studentid');
            var phoneNumber = $(this).data('phonenumber');

            // set values
            $('#smsModalLabel').text('Message');
            $('#studentid').val(studentID);
            $('#phonenumber').val(phoneNumber);

            // show smsModal
            $('#smsModal').modal('show');
        });
    });
</script>

<script>
    $(document).ready(function () {
        //  open groupsms modal
        $('.open-groupsms-modal').click(function () {
            $('#groupsmsModal').modal('show');
        });
    });
</script>

</html>