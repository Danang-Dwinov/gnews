<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__ . '/../config/database.php';

$validToken = $_ENV['NEWS_CRON_TOKEN'] ?? null;
$givenToken = $_GET['token'] ?? null;

if (!$validToken || !$givenToken || !hash_equals($validToken, $givenToken)) {
    http_response_code(403);
    exit('Forbidden');
}

$apiKey = $_ENV['NEWS_API'];
$country = 'us';

$categories = require __DIR__ . '/../config/category.php';

unset($categories['latest']);

$sql = "INSERT INTO news (title, description, content, url, image_url, source_name, category, published_at)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE
          title = VALUES(title),
          description = VALUES(description),
          content = VALUES(content),
          image_url = VALUES(image_url),
          source_name = VALUES(source_name),
          category = VALUES(category),
          published_at = VALUES(published_at)";
$stmt = $conn->prepare($sql);

$totalSaved = 0;

foreach ($categories as $slug => $label) {
    $url = "https://newsapi.org/v2/top-headlines?country={$country}&category={$slug}&apiKey={$apiKey}";
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_USERAGENT, 'GNews/1.0');
    $response = curl_exec($ch);

    if ($response === false) {
        error_log("cURL error ({$slug}): " . curl_error($ch));
        curl_close($ch);
        continue;
    }
    curl_close($ch);

    $data = json_decode($response, true);

    if (!$data || $data['status'] !== 'ok') {
        error_log("NewsAPI error ({$slug}): " . ($data['message'] ?? 'unknown response'));
        continue;
    }

    $savedInCategory = 0;
    foreach ($data['articles'] as $article) {
        if (empty($article['title']) || empty($article['url'])) continue;

        $stmt->execute([
            $article['title'],
            $article['description'],
            $article['content'],
            $article['url'],
            $article['urlToImage'],
            $article['source']['name'] ?? null,
            $slug,
            !empty($article['publishedAt']) ? date('Y-m-d H:i:s', strtotime($article['publishedAt'])) : null,
        ]);
        $savedInCategory++;
    }

    $totalSaved += $savedInCategory;
    echo "Kategori {$label} ({$slug}): {$savedInCategory} berita disimpan.\n";

    usleep(300000);
}

echo "Selesai. Total {$totalSaved} berita disimpan dari " . count($categories) . " kategori.\n";