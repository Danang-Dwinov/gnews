<?php
require_once __DIR__ . '/../config/database.php';
session_start();

function handleLogin($conn){
  if(isset($_POST['submit-login'])){
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);
    
    if(!filter_var($email_validate, FILTER_VALIDATE_EMAIL)){
      $_SESSION['login-email-format-message'] = "Invalid email format";
    }
    
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    
    if($stmt->rowCount()>0){
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if($email_validate==$row['email']){
        
        if(password_verify($password, $row["password"])){
          $_SESSION['username'] = $username;
          
          $_SESSION['login-notif-message'] = "Login succeed";
          header("Location: /");
          exit();
          
        } else {
          $_SESSION['login-password-message'] = "Password invalid";
        }
      } else {
        $_SESSION['login-email-message'] = "Email invalid";
      }
    } else {
      $_SESSION['login-username-message'] = "Username invalid";
    }
  }
}

function handleSignup($conn){
  if(isset($_POST['submit-signup'])){
    $full_name = $_POST['name'];
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users(full_name, username, email, password) values(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    
    if($stmt->execute([$full_name, $username, $email_validate, $hash_password])){
      $_SESSION['login-notif-message'] = 'Signup successful, please login';
      header("Location: /auth");
      exit;
    } else{
      $_SESSION['login-notif-message'] = 'Signup fail';
      header("Location: /auth");
      exit;
    }
  }
}

if($_SERVER["REQUEST_METHOD"] === 'POST'){
  if(isset($_POST['submit-login'])) handleLogin($conn);
  if(isset($_POST['submit-signup'])) handleSignup($conn);
}