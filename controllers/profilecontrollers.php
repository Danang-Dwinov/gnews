<?php
require_once __DIR__ . '/../config/database.php';
session_start();

$username = $_SESSION['username'];

$stmt = $conn->prepare('SELECT full_name, username, email FROM users WHERE username = ?');
$stmt->execute([$username]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>