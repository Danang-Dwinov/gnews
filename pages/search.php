<?php
require_once __DIR__ . '/../config/session.php';
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
  <main>
    <section>
      <div class="div-search">
        <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
        <input type="text" placeholder="Search"id="search-input" name="search">
        <button type="button" id="xmark-button" onclick="clearSearch()">
          <i class="fa-solid fa-times" ></i>
        </button>
      </div>
      <div class="content-search">
        
      </div>
    </section>
  </main>
  <?php require_once __DIR__ . "/../components/footer.php";?>
  <script src="../assets/js/pages/search.js"></script>
</body>
</html>