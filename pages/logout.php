<?php
session_start();

if($_SERVER["REQUEST_METHOD"] !== "POST"){
  header("Location: /settings");
  exit;
}
if(!isset($_SESSION["username"])){
  header("Location: /");
  exit;
}

session_unset();
session_destroy();

session_start();
$_SESSION['login-notif-message'] = "Logout succeed";

header('Location: /auth');
exit;
?>