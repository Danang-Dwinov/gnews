<?php
session_start();

if(isset($_SESSION['username'])){
  header("Location: pages/home.php");
  exit;
}
header("Location: pages/auth.php");
exit;
?>