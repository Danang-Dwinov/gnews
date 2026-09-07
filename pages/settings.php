<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: /auth");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Settings</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <?php require_once __DIR__ . "/../components/back.php";?>
  <main>
    <section class="settings-page" id="settings-page">
      <div class="div-settings">
        <button class="btn-settings">
          <a href="/edit profile" class="text-link-settings">
            <p class="text-settings">
          Edit profile</p>
          </a>
        </button>
      </div>
      <div class="div-settings">
        <form action="/deleteAccount" method="POST" onsubmit="return btnDeleteAcc()">
          <button class="btn-settings" onclick="btnDeleteAcc()">
            <p class="text-settings">Delete Account</p>
          </button>
        </form>
      </div>
    </section>
  </main>
  <script src="../assets/js/pages/settings.js"></script>
</body>
</html>