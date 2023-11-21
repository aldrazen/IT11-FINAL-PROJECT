<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin UMConnect</title>
  <link rel="icon" type="images/x-icon" href="../icons/University_of_Mindanao_Logo.png">
  <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/content.css">
  <link rel="stylesheet" href="admin.css">
  <style>

  </style>
</head>

<body>
  <nav class="container-fluid flex-wrap flex-md-nowrap sidebar" aria-label="Sidebar">
    <div class=" row flex-nowrap">
      <div class="col-auto min-vh-100" style="background-color:#F6F8FC;">
        <div class="py-3">
          <a href="" class="navbar-brand d-flex justify-content-center">
            <img class="um-logo " src="../icons/logo-transparent.png" alt="Logo" />
          </a>
          <ul class="nav nav-pills flex-column mt-5">
            <li class="nav-item py-3">
              <a href="admin.php" class="nav-link active bg-warning text-black" aria-current="page">
                <i class="fs-4 bi-house"></i><span class="fs-5 ms-3">Home</span>
              </a>
            </li>
            <li class="nav-item py-3">
              <button type="button" class="btn nav-link text-black" data-bs-toggle="modal" data-bs-target="#Message"
                data-bs-whatever="@mdo">
                <i class="fs-4 bi-pencil"></i><span class="fs-5 ms-3">Compose</span>
              </button>
            </li>
            <li class="nav-item">
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <main class="position-relative">
    <div class="modal fade" id="Message" tabindex="-1" aria-labelledby="messageModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="messageModal">New message</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send message</button>
          </div>
        </div>
      </div>
    </div>
    <div style="height: 95vh;">
      <div class="d-flex align-items-center h-25">
        <div class="container text-center">
          <h1 class="mb-5 display-5 text-black" style="font-weight: bold;">List of students</h1>

          <table class="table table-hover mt-4">
            <thead>
              <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>DISASTER CATEGORY</th>
                <th>DESCRIPTION</th>
                <th>FATALITIES</th>
                <th>LOCATION</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </main>

  <footer class="text-light py-5 position-relative" style="background: #610600;">
    <div class="container">
      <div class="row mb-2">
        <div class="col-lg-6">
          <h5 class="" style="font-size: 30px;">
            <img src="../icons/footer-logo.png" alt="disaster logo" style="height: 60px;">
            UMconnect
          </h5>
          <div class="bi bi-geo-alt-fill mt-4"><span style="margin-left: 10px; font-weight: bold;">DAVAO CITY 800,
              Davao
              del Sur, Philippines</span></div>
          <div class="bi bi-phone mt-4"><span style="margin-left: 10px; font-weight: bold;">+63 (082) 221 0190 -
              BOLTON
              CAMPUS</span></div>
          <div class="bi bi-phone mt-4"><span style="margin-left: 10px; font-weight: bold;">+63 (082) 305 0645 -
              MATINA
              CAMPUS</span></div>
        </div>
        <div class="col-6 col-lg-3 mt-3">
          <h5 class="my-4">Office Hours</h5>
          <h6>Monday to Friday</h6>
          <h6 class="mb-4">8:00 am to 5:00 pm</h6>
          <h6>Saturday</h6>
          <h6>8:00 am to 12:00 noon</h6>

        </div>
        <div class="col-6 col-lg-3 mt-3">
          <h5 class="mt-4">Get Socials</h5>
          <div class="row mt-sm-4">
            <div class="col-xxl-4 col-sm-12 mb-3" style="font-weight: bold;">Follow us!</div>
            <a class="col-lg col-2 bi bi-facebook" href="https://www.facebook.com/uniminofficial"
              style="color:white;"></a>
            <a class="col-lg col-2 bi bi-twitter-x"
              href="https://twitter.com/uniminofficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
              style="color:white;"></a>
            <a class="col-lg col-2 bi bi-tiktok" href="#" style="color:white;"></a>
            <a class="col-lg col-2 bi bi-instagram" href="#" style="color:white;"></a>
            <a class="col-lg col-2 bi bi-youtube" href="#" style="color:white;"></a>
          </div>
          <button class="btn btn-outline-danger p-3 rounded-pill text-white mt-3">TAG US IN YOUR PHOTOS!</button>
        </div>
      </div>
  </footer>
  <div class="container-fluid" style="background:rgb(212, 164, 43);">
    <div class="row">
      <div class="col text-center">
        <p class="text-black my-3">
          Copyright © 2023, All Rights Reserved. UM website <a href="#" style="font-weight: bold; color: black;">terms
            and conditions of use.</a>
        </p>
      </div>
    </div>
  </div>
</body>
<script src="../Bootstrap/js/bootstrap.js"></script>

</html>