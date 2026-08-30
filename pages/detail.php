<?php
session_start();

if(!isset($_SESSION["username"])){
  ?>
  <?php require_once __DIR__ . "/../components/back.php";?>
  <main>
    <section class="page-detail-profile" id="page-detail-profile">
      <img src="../assets/images/image_profile.jpg" id="detail-img-profile">
      <div class="detail-login">
        <label for="btn-login-detail">Click for -> </label>
        <a href="/auth" id="btn-login-detail">Login</a>
      </div>
    </section>
  </main>
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
  <title>GNews.com</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <?php require_once __DIR__ . "/../components/back.php";?>
  <main>
    <section class="page-detail-profile" id="page-detail-profile">
      <img src="../assets/images/image_profile.jpg" id="detail-img-profile">
        <br>
        <div class="detail-profile">
          <label class="text-detail-profile" for="label-detail-name" id="label-detail-name">Name :
          </label>
          <p class="text-detail-profile" id="text-detail-name"name="label-detail-name"><?=htmlspecialchars($user['full_name'])?></p>
        </div>
        <div class="detail-profile">
          <label class="text-detail-profile" for="label-detail-username" id="label-detail-username">Username : </label>
          <p class="text-detail-profile" id="text-detail-username"name="label-detail-username"><?=htmlspecialchars($user['username'])?></p>
        </div>
        <div class="detail-profile">
          <label class="text-detail-profile" for="label-detail-dateofbirth" id="label-detail-dateofbirth">Date of birth : </label>
          <p class="text-detail-profile" id="text-detail-dateofbirth" name="label-detail-dateofbirth">01/01/2000</p>
        </div>
        <div class="detail-profile">
          <label class="text-detail-profile" for="label-detail-no-phone" id="label-detail-no-phone">No phone : </label>
          <p class="text-detail-profile"id="text-detail-no-phone" name="label-detail-no-phone">088000000</p>
        </div>
        <div class="detail-profile">
          <label class="text-detail-profile" for="label-detail-email" id="label-detail-email">Email : </label>
          <p class="text-detail-profile" id="text-detail-email" name="label-detail-email"><?=htmlspecialchars($user['email'])?></p>
        </div>
    </section>
  </main>
  <script src="../assets/js/pages/detail.js"></script>
</body>
</html>