<?php
require_once __DIR__ . "/../config/database.php";

$id = (int)($_GET['id']?? 0);

$news = null;

if($id > 0){
  $sql = "SELECT title, published_at, source_name, image_url, description, url, category FROM news WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id]);
  $news = $stmt->fetch(PDO::FETCH_ASSOC);
}