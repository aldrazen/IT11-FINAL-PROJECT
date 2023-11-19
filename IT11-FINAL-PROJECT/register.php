<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/content.css">
</head>
</head>

<body>
  <nav class="navbar navbar-expand-md">
    <div class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main Navigation">
      <a href="index.php" class="navbar-brand p-2 me-2"><img class="um-logo" src="icons/logo-transparent.png"
          alt="Logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <div class="navbar-toggler-icon"></div>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul class="navbar-nav d-flex flex-row flex-wrap pt-2 py-md-0">
          <li class="nav-item col-6 col-md-auto">
            <a href="https://umindanao.edu.ph/" target="_blank" class="nav-link p-3">UMindanao</a>
          </li>
          <li class="nav-item col-6 col-md-auto">
            <a href="https://umindanao.blackboard.com/?new_loc=%2Fultra%2Fcourse" target="_blank"
              class="nav-link p-3">Blackboard</a>
          </li>
          <li class="nav-item col-6 col-md-auto">
            <a href="https://student.umindanao.edu.ph/login" target="_blank" class="nav-link p-3">Student Portal</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <div class="bg-img" id="img-bg">
      <div class="d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.50);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 mt-lg-5">
              <p class="card-title display-1 mt-lg-5 mb-0">UMconnect</p>
              <p class="card-subtitle">Join us shaping a more informed and connected campus community today.</p>
            </div>
            <div class="col-lg-4">
              <h1 class="my-5" style="color: rgb(199, 131, 5); font-weight: bold;">Create New Account</h1>
              <form>
                <div class="form-outline mb-3">
                  <label for="id" class="form-label">School ID</label>
                  <input type="number" class="form-control rounded-5" id="id" required>
                </div>
                <div class="form-outline mb-3">
                  <label for="email" class="form-label">University Email</label>
                  <input type="email" class="form-control rounded-5" id="email" required>
                </div>
                <div class="form-outline mb-3">
                  <label for="mobile-number" class="form-label">Mobile number</label>
                  <input type="number" class="form-control rounded-5" id="mobile-number" required>
                </div>
                <div class="form-outline mb-5">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control rounded-5" id="password" required>
                </div>
              </form>
              <div class="d-grid">
                <button type="submit" class="btn btn-lg rounded-5"
                  style="color: white; background-color: rgb(199, 131, 5);">Sign up</button>
              </div>
              <div class=" mt-2 d-flex justify-content-center">
                <p style="color: white;">Already Registerd?<a href="login.php"
                    style="color: white; font-weight: bold; margin-left: 5px;"><i>Login</i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="text-light py-5" style="background: #610600;">
    <div class="container">

      <div class="row mb-2">
        <div class="col-lg-6">
          <h5 class="" style="font-size: 30px;">
            <img src="icons/footer-logo.png" alt="disaster logo" style="height: 60px;">
            UMconnect
          </h5>
          <div class="bi bi-geo-alt-fill mt-4"><span style="margin-left: 10px; font-weight: bold;">DAVAO CITY 800, Davao
              del Sur, Philippines</span></div>
          <div class="bi bi-phone mt-4"><span style="margin-left: 10px; font-weight: bold;">+63 (082) 221 0190 - BOLTON
              CAMPUS</span></div>
          <div class="bi bi-phone mt-4"><span style="margin-left: 10px; font-weight: bold;">+63 (082) 305 0645 - MATINA
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
<script src="js/bootstrap.js"></script>

</html>