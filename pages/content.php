<?php
session_start();
require_once __DIR__ . "/../controllers/contentcontrollers.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Content</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <header id="head">
    <a href="/" id="link-back"><i class="fa-solid fa-chevron-left"></i></a>
    <?php if (!empty($news['category'])): ?>
      <p id="text"><?=htmlspecialchars($news['category'])?></p>
    <?php endif; ?>
  </header>
  <main>
    <?php if (!$news): ?>
      <section class="content-page">
        <p class="news-card-empty">news not found.</p>
        <a href="home.php">&larr; Back to home page</a>
      </section>
    <?php else: ?>
      <article class="content-page">
        <h1 class="content-title"><?=htmlspecialchars($news['title'])?></h1>

        <p class="content-meta">
          <?=htmlspecialchars($news['source_name'] ?? 'Unknown source')?>
          <?php if (!empty($news['published_at'])): ?>
            &middot; <?=date('d M Y, H:i', strtotime($news['published_at']))?>
          <?php endif; ?>
        </p>

        <?php if (!empty($news['image_url'])): ?>
          <img src="<?=htmlspecialchars($news['image_url'])?>" class="content-image" alt="<?=htmlspecialchars($news['title'])?>">
        <?php endif; ?>

        <div class="content-body">
          <p><?=nl2br(htmlspecialchars($news['description']))?></p>
        </div>

        <?php if (!empty($news['url'])): ?>
          <p>
            <a href="<?=htmlspecialchars($news['url'])?>" target="_blank" rel="noopener noreferrer">
              Read the full article at the original source &rarr;
            </a>
          </p>
        <?php endif; ?>
      </article>
    <?php endif; ?>
  </main>
</body>
</html>