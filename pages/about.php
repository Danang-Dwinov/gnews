<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <?php require_once __DIR__ . "/../components/back.php";?>
  <main>
    <section class="about-page" id="about-page">
      <div class="about-content">
        <h1>About</h1>
    
        <h2>GNews</h2>
        <p>Version: 1.0.0</p>
    
        <h2>Deskription</h2>
        <p>GNews is a web-based news application that displays the latest news across various categories. The application automatically fetches news data from the News API and presents it in a format that is easy to read and navigate.</p>
    
        <h2>Devepoler</h2>
        <p>develop by Darren.</p>
    
        <h2>Contact</h2>
        <p>Email: darren@gmain.com</p>
        <p>GitHub: <a href="https://github.com/Danang-Dwinov/gnews" target="_blank">github.com/Danang-Dwinov/gnews</a></p>
    
        <h2>Technology</h2>
        <p>Built using PHP, JavaScript, HTML, dan CSS.</p>
      </div>
    </section>
  </main>
  <script src="../assets/js/pages/about.js"></script>
</body>
</html>