<?php
session_start();
if(isset($_SESSION['admin_ID'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
  <script src="../Bootstrap/js/bootstrap.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" type="images/x-icon" href="../icons/University_of_Mindanao_Logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="admin.css">
  <title>ADMIN</title>

</head>

<body>
  <nav class="navbar navbar-expand-md bg-white">
    <div class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main Navigation">
      <a href="admin_home.php" class="navbar-brand p-2 me-2"><img class="um-logo" src="../icons/logo-transparent.png"
          alt="Logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <div class="navbar-toggler-icon"></div>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul class="navbar-nav d-flex flex-row flex-wrap pt-2 py-md-0">
          <li class="nav-item col-6 col-md-auto">
            <a href="admin_home.php" class="nav-link p-3">Home</a>
          </li>
          <li class="nav-item col-6 col-md-auto">
            <a href="admin_message.php " class="nav-link p-3 active">Compose Message</a>
          </li>
          <li class="col col-md-auto d-flex">
            <div class="navbar-text p-3">Welcome, <?php echo $_SESSION['admin_username']?>!
              <span> <a href="../session/admin_logout.php" style="color: #be1206">logout?</a></span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="container">
      <h1 class="text-center" style="color: rgb(199, 131, 5); font-weight: bold;">STUDENT LIST</h1>
      <table class="table table-responsive-lg font-weight-bold mt-3">
        <thead>
          <tr class="table-dark table-active">
            <th>Student ID</th>
            <th>First tname</th>
            <th>Last name</th>
            <th>Program</th>
            <th>Phone Number</th>
            <th>Year Level</th>
            <th>Actions</th>
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
            <td><button type="button" class="btn btn-success open-sms-modal bi bi-envelope-arrow-down-fill"
                data-studentid="<?php echo $row['student_id']; ?>"
                data-phonenumber="<?php echo $row['mobile_number']; ?>">
              </button>

              <button type="button" class="btn btn-primary open-message bi bi-eye-fill" data-bs-toggle="modal"
                data-bs-target="#viewModal">
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
      <div class="d-grid justify-content-center">
        <button type="button" class="btn btn-primary open-groupsms-modal bi bi-people-fill"> Group Message
        </button>
      </div>
    </div>

    <div class="container mt-5 text-center">
      <h1 style="color: rgb(199, 131, 5); font-weight: bold;">MESSAGE HISTORY</h1>
      <table class="table text-center table-responsive-sm font-weight-bold mt-3">
        <thead>
          <tr class="table-dark table-active">
            <th>Student ID</th>
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
                        echo "<td class='bg-success rounded text-white'>" . $row['stat'] . "</td>";
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
  </div>

</body>
<script>
$(document).ready(function() {
  // Open smsModal
  $('.open-sms-modal').click(function() {
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
$(document).ready(function() {
  //  open groupsms modal
  $('.open-groupsms-modal').click(function() {
    $('#groupsmsModal').modal('show');
  });
});
</script>

</html>
<?php
}else{
  header("Location: admin_home.php");
}
?>