<?php
require __DIR__ . '/../config/database.php';

$categories = require __DIR__ . '/../config/category.php';

$sql = 'SELECT id, title, content, source_name, url, category, image_url, published_at 
        FROM news 
        ORDER BY id DESC';
$stmt = $conn->prepare($sql);
$stmt->execute();
$allNews = $stmt->fetchAll(PDO::FETCH_ASSOC);

$newsByCategory = [];
foreach (array_keys($categories) as $slug) {
  $newsByCategory[$slug] = [];
}

$newsByCategory['latest'] = $allNews;

foreach ($allNews as $news) {
  $cat = $news['category'];
  if ($cat !== 'latest' && isset($newsByCategory[$cat])) {
      $newsByCategory[$cat][] = $news;
  }
}
?>