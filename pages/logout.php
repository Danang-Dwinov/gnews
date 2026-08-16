<?php
error_log("Masuk Logout");

session_start();

session_unset();
session_destroy();

header('Location: /auth');
exit;
?>