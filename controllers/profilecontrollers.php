<?php
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../config/database.php';

$username = $_SESSION['username'];

$stmt = $conn->prepare('SELECT full_name, username, email FROM users WHERE username = ?');
$stmt->execute([$username]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>