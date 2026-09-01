<?php
session_start();
require_once __DIR__ . "/../controllers/searchcontrollers.php";
require_once __DIR__ . '/../helper/searchRenderNews.php';
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
        <form action="/search" method="GET">
          <input type="type" placeholder="Search"id="search-input" name="q" value="<?=htmlspecialchars($keyword)?>">
        </form>
        <button type="button" id="xmark-button" onclick="clearSearch()">
          <i class="fa-solid fa-times" ></i>
        </button>
      </div>
      <div class="news-list">
        <?php if($keyword === ''): ?>
          <p class="news-card-empty">input keyword for search news</p>
        <?php elseif(empty($searchResults)): ?>
          <p class="news-card-empty">There is no news that matches "<?=htmlspecialchars($keyword)?>"</p>
        <?php else: ?>
          <p class="search-result-count"><?=count($searchResults)?> result for "<?=htmlspecialchars($keyword)?>"</p>
          <?php render_news_cards($searchResults); ?>
        <?php endif; ?>
      </div>
    </section>
  </main>
  <?php require_once __DIR__ . "/../components/footer.php";?>
  <script src="../assets/js/pages/search.js"></script>
</body>
</html>