<?php
function render_news_cards(array $newsList): void {
  if (empty($newsList)) {
    echo '<p class="news-card-empty">Belum ada berita untuk kategori ini.</p>';
    return;
  }
  foreach ($newsList as $news) {
    ?>
    <article class="news-card">
      <img src="<?=htmlspecialchars($news['image_url'])?>" class="news-card-image">
      <div class="news-card-body">
        <a href="/content?id=<?=urlencode($news['id'])?>" class="news-card-link">
          <p class="news-card-text"><?=htmlspecialchars($news['title'])?></p>
          <p class="news-card-date"><?=htmlspecialchars($news['published_at'])?></p>
        </a>
      </div>
    </article>
    <?php
  }
}
?>