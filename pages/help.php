<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>faQ help</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <?php require_once __DIR__ . "/../components/back.php";?>
  <main>
    <section class="help-page" id="help-page">
      <h1>faQ Help</h1>
      <div class="faq-item">
        <h3 class="faq-question">How to register a new account?</h3>
        <p class="faq-answer">If you want to register an account, you can go to the /auth page or click <a href="/auth">Signup</a> then select the signup option.</p>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">How to logout?</h3>
        <p class="faq-answer">If you want to log out, you can go to the <a href="/profile">Profile</a> page then press the button that says logout, then confirm via the window.</p>
      </div>
    </section>
  </main>
  <script src="../assets/js/pages/help.js"></script>
</body>
</html>