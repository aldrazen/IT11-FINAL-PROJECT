<?php
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $student_id = isset($_POST["id"]) ? $_POST["id"] : "";
  $student_email = isset($_POST["email"]) ? $_POST["email"] : "";
  $mobile_number = isset($_POST["mobile-number"]) ? $_POST["mobile-number"] : "";
  $student_password = isset($_POST["password"]) ? $_POST["password"]: "";

  $query = "INSERT INTO tbl_student (student_id, student_email, mobile_number, student_password) 
            VALUES ('$student_id', '$student_email', '$mobile_number', '$student_password')";

  $result = mysqli_query($connection, $query);

  if ($result) {

    echo "Registration successful!";
  } else {
    if (mysqli_errno($connection) == 1062) {
        echo "Error: Duplicate entry. User with the same Student ID already exists.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
  }
  mysqli_close($connection);
}
?>
