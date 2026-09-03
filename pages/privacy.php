<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Privacy policy</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <?php require_once __DIR__ . "/../components/back.php";?>
  <main>
    <section class="privacy-page" id="privacy-page">
      <div class="policy-content">
        <h1>Privacy Policy</h1>
        <p><em>Last Updated: <?= date('d m Y') ?></em></p>
      
        <h2>1. Information we collect</h2>
        <p>When you register on GNews, we collect the following information:</p>
        <ul>
          <li>Username</li>
            <li>Email addres</li>
            <li>Password (Stored in encrypted/hashed form)</li>
        </ul>
        <p>We saved your information im databases</p>
      
        <h2>2. Cookies and session user</h2>
        <p>GNews uses cookies and session information to maintain your login status while using the app. These cookies are not used to track your activity outside of the app.</p>
      
        <h2>3. Source news</h2>
        <p>The news content displayed on GNews is sourced from third parties (News API). We are not responsible for the accuracy of the content sourced from these news providers.</p>
      
        <h2>4. How We Use Your Information</h2>
        <ul>
          <li>Managing accounts and authentication processes (login/logout)</li>
          <li>Provides news category personalization features</li>
          <li>Improve security and prevent account misuse</li>
        </ul>
      
        <h2>5. Data security</h2>
        <p>Your password is stored using encryption (hashing) and is never stored in plain text. We employ standard security practices to protect your data from unauthorized access.</p>
      
          <h2>6. Hak Anda</h2>
          <p>You can delete your account at any time via the logout button on the page <a href="/profile">profile</a>. Account deletion will permanently delete your personal data from our database.</p>
      
          <h2>7. Changes policy</h2>
          <p>We may update this privacy policy at any time. Changes will be posted on this page.</p>
      
          <h2>8. Contact</h2>
          <p>If you have any questions regarding this privacy policy, please contact us via the email listed on the page <a href="/about">about</a>.</p>
      </div>
    </section>
  </main>
  <script src="../assets/js/pages/privacy.js"></script>
</body>
</html>