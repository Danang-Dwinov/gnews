<?php
require_once __DIR__ . "/../config/database.php";
session_start();

if($_SERVER["REQUEST_METHOD"] !== "POST"){
  header("Location: /settings");
  exit;
}
if(!isset($_SESSION["username"])){
  header("Location: /");
  exit;
}
$username = $_SESSION["username"];

$sql = "DELETE FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$username]);

session_unset();
session_destroy();

session_start();
$_SESSION['login-notif-message'] = "Account deletion successful";

header("Location: /auth");
exit;
?>