<?php
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($request === '/logout') {
  require __DIR__ . '/pages/logout.php';
  exit;
}

$file = __DIR__ . $request;

if ($request !== '/' && is_file($file)){
  return false;
}

require __DIR__ . '/index.php';
?>