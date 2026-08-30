<?php
session_start();

if(!isset($_SESSION["username"])){
  ?>
  <main>
    <section class="profile-page" id="profile-page">
      <div class="profile-header">
        <div class="profile-head-img">
          <img src="../assets/images/image_profile.jpg" id="img-profile">
        </div>
        <div class="profile-head-text">
          <a href="/auth" id="btn-login-profile">Click for Login/Signup</a>
        </div>
      </div>
      <div class="main-fitur-profile">
        <div class="fitur-profile">
          <a class="button-fitur-profile"  id="button-click-detail"href="/detail-profile">Detail Profile</a>
        </div>
        <div class="fitur-profile">
          <a class="button-fitur-profile" id="button-click-favorit"href="#page-favorit-profile">Favorit</a>
        </div>
        <div class="fitur-profile">
          <a class="button-fitur-profile"  id="button-click-notif" href="#page-notif-profile">Notifications</a>
        </div>
        <div class="fitur-profile">
          <a class="button-fitur-profile" id="button-click-privacy" href="#page-privacy-profile">Privacy Policy</a>
        </div>
        <div class="fitur-profile">
          <a class="button-fitur-profile" id="button-click-help" href="#page-help-profile">faQ Help</a>
        </div>
        <div class="fitur-profile">
          <a class="button-fitur-profile" id="button-click-about" href="#page-about-profile">About</a>
        </div>
      </div>
    </section>
  </main>
  <?php require_once __DIR__ . "/../components/footer.php";?>
  <?php
  exit;
}
require_once __DIR__ . '/../controllers/profilecontrollers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GNews</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <main>
    <section class="profile-page" id="profile-page">
      <div class="profile-header">
        <div class="profile-head-img">
          <img src="../assets/images/image_profile.jpg" id="img-profile">
        </div>
        <div class="profile-head-text">
          <p id="username-text-head"><?=htmlspecialchars($user['username'])?></p>
          <p id="email-text-head"><?=htmlspecialchars($user['email'])?></p>
        </div>
      </div>
      <br>
      <div class="main-fitur-profile">
        <div class="fitur-profile">
          <a class="button-fitur-profile"  id="button-click-detail"href="/detail-profile">Detail Profile</a>
        </div>
        <div class="fitur-profile">
          <a class="button-fitur-profile" id="button-click-favorit"href="#page-favorit-profile">Favorit</a>
        </div>
        <div class="fitur-profile">
          <a class="button-fitur-profile"  id="button-click-notif" href="#page-notif-profile">Notifications</a>
        </div>
        <div class="fitur-profile">
          <a class="button-fitur-profile" id="button-click-privacy" href="#page-privacy-profile">Privacy Policy</a>
        </div>
        <div class="fitur-profile">
          <a class="button-fitur-profile" id="button-click-help" href="#page-help-profile">faQ Help</a>
        </div>
        <div class="fitur-profile">
          <a class="button-fitur-profile" id="button-click-about" href="#page-about-profile">About</a>
        </div>
        <form action="/logout" method="POST" class="fitur-profile">
          <a href="/logout" class="button-fitur-profile" id="button-click-logout">Log Out</a>
        </form>
      </div>
    </section>
  </main>
  <?php require_once __DIR__ . "/../components/footer.php";?>
  <script type="module" src="../assets/js/pages/profile.js"></script>
</body>
</html>