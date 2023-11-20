<?php
include("db_connection.php");

session_start();
if (isset($_POST['id']) && isset($_POST['password'])) {
  $student_id = $_POST['id'];
  $student_password = $_POST['password'];

  $query = "SELECT * FROM tbl_student WHERE student_id = '$student_id'";
  $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0) { 
      $row = mysqli_fetch_assoc($result);
      if ($student_password == $row['student_password']) { 
        $_SESSION['student_fname'] = $row['student_fname'];
        $_SESSION['student_id'] = $row['student_id'];
        header("Location: home.php");
      } else { 
        echo 
        "<script>alert('Your password is incorrect.'); window.location.href = 'login.php';</script>";
      }
    } else { 
        echo 
        "<script>alert('Account not registered.'); window.location.href = 'login.php';</script>";
      }
} else {
    header("Location: index.php");
}
?>