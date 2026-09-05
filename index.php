<?php
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request) {
    case '/':
        require __DIR__ . '/pages/home.php';
        break;
    case '/search':
        require __DIR__ . '/pages/search.php';
        break;
    case '/content':
        require __DIR__ . '/pages/content.php';
        break;
    case '/profile':
        require __DIR__ . '/pages/profile.php';
        break;
    case '/detail profile':
        require __DIR__ . '/pages/detail.php';
        break;
    case '/bookmark':
        require __DIR__ . '/pages/bookmark.php';
        break;
    case '/privacy':
        require __DIR__ . '/pages/privacy.php';
        break;
    case '/notifications':
        require __DIR__ . '/pages/notifications.php';
        break;
    case '/help':
        require __DIR__ . '/pages/help.php';
        break;
    case '/about':
        require __DIR__ . '/pages/about.php';
        break;
    case '/auth':
        require __DIR__ . '/pages/auth.php';
        break;
    case '/logout':
        require __DIR__ . '/pages/logout.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/pages/404.php';
}
?>