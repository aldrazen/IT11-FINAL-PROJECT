<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UMConnect</title>
  <link rel="icon" type="images/x-icon" href="../icons/University_of_Mindanao_Logo.png">
  <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="admin.css">
</head>

<body>
  <div class="bg-img" id="img-bg">
    <div class="d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.50);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <h1 class="text-center" style="color: rgb(199, 131, 5); font-weight: bold;">UMconnect Admin</h1>
            <form action="../admin_database/admin_login_db.php" method="POST">
              <div class="form-outline">
                <label for="username" class="form-label px-2 mt-3">Username</label>
                <input type="text" class="form-control rounded-5" name="username" id="username" required>
                <div class="form-outline mt-2">
                  <label for="password" class="form-label px-2 mt-3">Password</label>
                  <input type="password" class="form-control rounded-5" name="password" id="password" required>
                </div>
                <div class="d-grid mt-5">
                  <button type="submit" name="submit" class="btn btn-lg rounded-5"
                    style="color: white; background-color: rgb(199, 131, 5);">Login</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="../Bootstrap/js/bootstrap.js"></script>

</html>