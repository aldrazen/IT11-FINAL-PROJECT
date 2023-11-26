<?php
include("db_connection.php");

session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
  $admin_username = $_POST['username'];
  $admin_password = $_POST['password'];

  $query = "SELECT * FROM tbl_admin WHERE admin_username = '$admin_username'";
  $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0) { 
      $row = mysqli_fetch_assoc($result);
      if ($admin_password == $row['admin_password']) { 
        $_SESSION['admin_ID'] = $row['admin_ID']; 
        $_SESSION['admin_username'] = $row['admin_username'];
        header("Location: ../admin/admin_home.php");
      } else { 
        echo 
        "<script>alert('Your password is incorrect.'); window.location.href = '../admin/login.php';</script>";
      }
    } else { 
        echo 
        "<script>alert('Account not registered.'); window.location.href = '../admin/login.php';</script>";
      }
} else {
    header("Location: ../admin/login.php");
}
?>