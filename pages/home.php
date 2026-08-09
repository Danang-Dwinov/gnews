<?php
session_start();

if(!isset($_SESSION['username'])){
  header('Location: auth.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/pages/home.css">
  <link rel="stylesheet" href="../assets/css/components/header.css">
</head>
<body>
  <?php require_once "/storage/emulated/0/gnews/components/header.php";?>
  <main>
    <section class="home-page" id="home-page">
      <nav class="home-nav">
        <ul class="home-nav-list">
          <li><a href="#page-latest" class="home-nav-link" id="nav-latest">Latest</a></li>
          <li><a href="#page-headline" class="home-nav-link" id="nav-headline">Headline</a></li>
          <li><a href="#page-populer" class="home-nav-link" id="nav-populer">Populer</a></li>
          <li><a href="#page-economy" class="home-nav-link" id="nav-economy">Economy</a></li>
          <li><a href="#page-tecnology" class="home-nav-link" id="nav-tecnology">Technology</a></li>
          <li><a href="#page-market" class="home-nav-link" id="nav-market">Market</a></li>
          <li><a href="#page-finance" class="home-nav-link" id="nav-finance">Finance</a></li>
          <li><a href="#page-politics" class="home-nav-link" id="nav-politics">Politics</a></li>
          <li><a href="#page-ai" class="home-nav-link" id="nav-ai">Ai</a></li>
          <li><a href="#page-world" class="home-nav-link" id="nav-world">world</a></li>
          <li><a href="#page-sport" class="home-nav-link" id="nav-sport">Sport</a></li>
        </ul>
      </nav>
      <div class="page-latest" id="page-latest">
        <h2 class="title-nav-home" id="page-latest-title">Latest -></h2>
        <div class="news-card">
          <img src="image/image(1).jpeg" class="news-card-image">
          <div class="news-card-body">
            <a href="" class="news-card-link">
              <p class="news-card-text"></p>
            </a>
          </div>
        </div>
      </div>
      <div class="page-headline" id="page-headline">
        <h2 class="title-nav-home" id="page-headline-title">Headline -></h2>
      </div>
      <div class="page-populer" id="page-populer">
        <h2 class="title-nav-home" id="page-populer-title">Populer -></h2>
      </div>
      <div class="page-economy" id="page-economy">
        <h2 class="title-nav-home" id="page-economy-title">Economy -></h2>
      </div>
      <div class="page-tecnology" id="page-tecnology">
        <h2 class="title-nav-home" id="page-tecnology-title">Tecnology -></h2>
      </div>
      <div class="page-market" id="page-market">
        <h2 class="title-nav-home" id="page-market-title">Market -></h2>
      </div>
      <div class="page-finance" id="page-finance">
        <h2 class="title-nav-home" id="page-finance-title">Finance -></h2>
      </div>
      <div class="page-politics" id="page-politics">
        <h2 class="title-nav-home" id="page-politics-title">Politics -></h2>
      </div>
      <div class="page-ai" id="page-ai">
        <h2 class="title-nav-home" id="page-ai-title">Ai -></h2>
      </div>
      <div class="page-world" id="page-world">
        <h2 class="title-nav-home" id="page-world-title">World -></h2>
      </div>
      <div class="page-sport" id="page-sport">
        <h2 class="title-nav-home" id="page-sport-title">Sport -></h2>
      </div>
    </section>
  </main>
  <?php require_once "/storage/emulated/0/gnews/components/footer.php";?>
</body>
</html>