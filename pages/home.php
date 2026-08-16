<?php
session_start();
if(!isset($_SESSION['username'])){
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
  <title>GNews.com</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <?php require_once __DIR__ . "/../components/header.php";?>
  <main>
    <section class="home-page" id="home-page">
      <?php require_once __DIR__ . "/../components/navbar.php";?>
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
  <?php require_once __DIR__ . "/../components/footer.php";?>
  <script type="module" src="../assets/js/pages/home.js"></script>
</body>
</html>