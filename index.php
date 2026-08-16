<?php
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request) {
    case '/':
        require __DIR__ . '/pages/home.php';
        break;
    case '/profile':
        require __DIR__ . '/pages/profile.php';
        break;
    case '/auth':
        require __DIR__ . '/pages/auth.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/pages/404.php';
}
?>