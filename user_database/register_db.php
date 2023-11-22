<?php
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $first_name = isset($_POST["first_name"])? $_POST["first_name"]:"";
  $last_name = isset($_POST["last_name"])? $_POST["last_name"]:"";
  $student_id = isset($_POST["id"]) ? $_POST["id"] : "";
  $student_email = isset($_POST["email"]) ? $_POST["email"] : "";
  $course = isset($_POST["course"])? $_POST["course"]:"";
  $year_level = isset($_POST["year_level"])? $_POST["year_level"]:"";
  $mobile_number = isset($_POST["contact_number"]) ? $_POST["contact_number"] : "";
  $student_password = isset($_POST["password"]) ? $_POST["password"]: "";

  $check = "SELECT * FROM tbl_student WHERE student_id = '$student_id' OR student_email = '$student_email'";
  $check_result = mysqli_query($connection, $check);
    if(mysqli_num_rows($check_result) > 0){
      echo
      "<script> alert('Enter your correct id or email!'); window.location.href = '../user/register.php'; </script>";
    }
    else{
      $register_query = "INSERT INTO tbl_student VALUES($student_id,'$student_email',$mobile_number,'$student_password','$first_name','$last_name','$course',$year_level)";
      $result = mysqli_query($connection, $register_query);
      echo
      "<script> alert('Registered successfully!'); window.location.href = '../user/index.php';</script>";
    }
}
?>