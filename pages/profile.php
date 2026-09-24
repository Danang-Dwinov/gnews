<?php
require_once __DIR__ . '/../controllers/ProfileControllers.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profile</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <main>
    <section class="profile-page" id="profile-page">
      <div class="profile-header">
        <a href="/settings" id="button-settings">
          <i class="fa-solid fa-gear"></i>
        </a>
        <div class="profile-head-img">
          <img src="../assets/images/image_profile.jpg" id="img-profile">
        </div>
        <?php
        if(!isset($_SESSION['username'])){?>
          <div class="profile-head-text">
            <a href="/auth" id="btn-login-profile">Click for Login/Signup</a>
          </div>
          <?php
        } else {
          ?>
          <div class="profile-head-text">
            <p id="username-text-head"><?=htmlspecialchars($user['username'])?></p>
            <p id="email-text-head"><?=htmlspecialchars($user['email'])?></p>
          </div>
          <?php
        }
        ?>
      </div>
      <br>
      <?php
      if(!isset($_SESSION['username'])){
      ?>
        <div class="main-fitur-profile">
          <div class="fitur-profile">
            <a class="button-fitur-profile"  id="button-click-detail"href="/detail-profile">Detail Profile</a>
          </div>
          <div class="fitur-profile">
            <a class="button-fitur-profile" id="button-click-privacy" href="/privacy">Privacy Policy</a>
          </div>
          <div class="fitur-profile">
            <a class="button-fitur-profile" id="button-click-help" href="/help">faQ Help</a>
          </div>
          <div class="fitur-profile">
            <a class="button-fitur-profile" id="button-click-about" href="/about">About</a>
          </div>
        </div>
        <?php
      } else{
        ?>
        <div class="main-fitur-profile">
          <div class="fitur-profile">
            <a class="button-fitur-profile"  id="button-click-detail" href="/detail-profile">Detail Profile</a>
          </div>
          <div class="fitur-profile">
            <a class="button-fitur-profile" id="button-click-favorit"href="/bookmark">Bookmark</a>
          </div>
          <div class="fitur-profile">
            <a class="button-fitur-profile" id="button-click-privacy" href="/privacy">Privacy Policy</a>
          </div>
          <div class="fitur-profile">
            <a class="button-fitur-profile" id="button-click-help" href="/help">faQ Help</a>
          </div>
          <div class="fitur-profile">
            <a class="button-fitur-profile" id="button-click-about" href="/about">About</a>
          </div>
        </div>
        <?php
      }
      ?>
    </section>
  </main>
  <?php require_once __DIR__ . "/../components/footer.php";?>
  <script type="module" src="../assets/js/pages/profile.js"></script>
</body>
</html>