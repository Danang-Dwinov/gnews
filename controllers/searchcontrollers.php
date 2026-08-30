<?php
require_once __DIR__ . "/../config/database.php";

$keyword = trim($_GET['q'] ?? '');

$searchResults = [];

if($keyword !== ''){

  $sql = 'SELECT id, title, content, source_name, url, category, image_url, published_at
        FROM news
        WHERE title LIKE ? OR content LIKE ?
        ORDER BY published_at DESC';
        
  $stmt = $conn->prepare($sql);
  $stmt->execute([
        '%' . $keyword . '%',
        '%' . $keyword . '%'
    ]);
    
  $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
}