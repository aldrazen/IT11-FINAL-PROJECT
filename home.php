<?php
session_start();
if(isset($_SESSION['student_id'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="icon" type="images/x-icon" href="icons/University_of_Mindanao_Logo.png">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/content.css">
</head>

<body>
  <nav class="navbar navbar-expand-md">
    <div class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main Navigation">
      <a href="home.php" class="navbar-brand p-2 me-2"><img class="um-logo" src="icons/logo-transparent.png"
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
          <li class="col col-md-auto d-flex">
            <div class="nav-link navbar-text p-3">
              Welcome, <?php echo $_SESSION['student_fname']?>
              <span> <a href="session/logout.php" style="color: #be1206">logout?</a></span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <div class="container-fluid p-0">
      <div class="card text-bg-dark">
        <div class="card-img-overlay d-flex flex-column align-items-center justify-content-around h-100">
          <p class="card-subtitle text-uppercase mb-0" style="letter-spacing: 8px">WELCOME TO</p>
          <p class="card-title display-1 mb-0">UMconnect</p>
          <a class="btn btn-light " role="button" href="#info" style="letter-spacing: 5px;">LEARN MORE</a>
        </div>
        <img src="images/dpt.jpg" class="card-img h-100" alt="">
      </div>
    </div>
    <div class="container-xxl mt-5" id="info">
      <div class="row">
        <div class="col-lg-6 my-md-5">
          <h1 style="color: #A2464B;">STAY IN THE KNOW, <br>ON THE GO!</h1>
          <p class="mt-5 text-xl-start info1">Welcome to UMconnect, where announcements find you. Join us and never miss
            a beat in your university life. Register, relax, and let the updates come to you!</p>
          <p class="mt-5 text-xl-start info2">UMconnect is a user-friendly online platform designed to enhance
            communication and connectivity within your university community. It serves as a central hub for students to
            register their email and cellphone numbers, enabling the university to deliver important announcements and
            updates directly to their mobile devices. With UMconnect, staying informed about campus events, news, and
            academic matters has never been easier. Our mission is to streamline the flow of essential information,
            ensuring that students are always in the know and well-connected with the institution.</p>
        </div>
        <div class="col-lg-6 my-lg-5">
          <img class="img-thumbnail h-100 w-100" src="images/2016-07-12.jpg">
        </div>
      </div>
    </div>
  </main>

  <footer class="text-light py-5 mt-5" style="background: #610600;">
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
<?php
}else{
  header("Location: index.php");
}
?>