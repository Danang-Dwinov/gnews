<?php
session_start();
include __DIR__ . '/../controllers/newscontrollers.php';
include __DIR__ . '/../helper/homeRenderNews.php';

function headerLogin(){
  if(!isset($_SESSION['username'])){
  ?>
    <header class="header">
      <h2 id="header-title">GNews.com</h2>
      <a href="/auth" id="go-login">Login <i class="fa-solid fa-arrow-right"></i></a>
    </header>
    <?php
    exit;
  }
}

function listContentHome($categories, $newsByCategory){?>
  <?php foreach ($categories as $slug => $label): ?>
    <div class="page-category" id="page-<?=$slug?>" <?= $slug !== 'latest' ? 'style="display:none;"' : '' ?>>
      <h2 class="title-nav-home" id="page-<?=$slug?>-title"><?=htmlspecialchars($label)?> -></h2>
      <div class="news-list">
        <?php render_news_cards($newsByCategory[$slug]); ?>
      </div>
    </div>
  <?php endforeach; ?>
  <?php
}