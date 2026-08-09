<?php
require '/storage/emulated/0/gnews/config/database.php';
session_start();

if(isset($_POST['submit-signup'])){
  $full_name = $_POST['name'];
  $username = trim($_POST['username']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  
  $hash_password = password_hash($password, PASSWORD_DEFAULT);
  
  $signup_message ="";
  
  $sql = "INSERT INTO users(full_name, username, email, password) values(?,?,?,?)";
  $stmt = $conn->prepare($sql);
  
  if($stmt->execute([$full_name, $username, $email, $hash_password])){
    header("Location: home.php");
    exit();
  } else{
    header("Location: auth.php");
    exit();
  }
}

if(isset($_POST['submit-login'])){
  $username = trim($_POST['username']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  
  $login_message = "";
  
  $sql = "SELECT * FROM users WHERE username = ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$username]);
  
  if($stmt->rowCount()>0){
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($email==$row['email']){
      
      if(password_verify($password, $row["password"])){
        $_SESSION['username'] = $username;
        
        header("Location: home.php");
        exit();
        
      } else {
        $login_message = "Password salah";
      }
    } else {
      $login_message = "Email salah";
    }
  } else {
    $login_message = "Username salah";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/pages/auth.css">
  <link rel="stylesheet" href="../assets/css/components/header.css">
</head>
<body>
  <?php require_once "/storage/emulated/0/gnews/components/header.php";?>
  <main>
    <section class="login-page" id="login-page">
      <div class="container-main" align="center">
        <div class="main-list-form" id="main-list-form">
          <a href="#form-login" id="opsi-login" title="form login">Log In</a>
          <a href="#form-signup" id="opsi-signup" title="form signup">Sign Up</a>
        </div>
        <form method="POST" action="auth.php" href="#form-login" id="form-login">
          <br>
          <label id="login-username-label" for="username">username :</label>
          <br>
          <input type="text" id="login-username-input" name="username" placeholder="darren" required title="Input username">
          <br>
          <br>
          <label id="login-email-label" for="email">email :</label>
          <br>
          <input type="email" id="login-email-input" name="email" placeholder="darrenjunior44@gmail.com" required title="Input email">
          <br>
          <br>
          <label id="login-password-label" for="password">password :</label>
          <br>
          <input type="password" id="login-password-input" name="password" placeholder="example : daRReN123#$_" minlegth="8" title="input password">
          <br>
          <div class="login-options">
            <input type="checkbox" id="login-remember-checkbox">
            <label for="login-remember-checkbox" id="login-remember-label">Remember me</label>
            <a href="https://myaccount.google.com/?hl=id" id="login-forgot-password-link">forgot password?</a>
          </div>
          <br>
          <input type="submit" value="Login" id="login-submit-btn" name="submit-login">
        </form>
        <form method="POST" action="auth.php" href="#form-signup" id="form-signup">
          <label id="signup-name-label" for="name">full name :</label>
          <br>
          <input type="text" id="signup-name-input" name="name" placeholder="Darren Junior" required title="Input name">
          <br>
          <br>
          <label id="signup-username-label" for="username">username :</label>
          <br>
          <input type="text" id="signup-username-input" name="username" placeholder="Darren Junior" required title="Input username">
          <br>
          <br>
          <label id="signup-no-phone-label" for="no-phone">no.phone :</label>
          <br>
          <input type="tel" id="signup-no-phone-input" name="no-phone" required title="Input No-phone" placeholder="08876543210">
          <br>
          <br>
          <label id="signup-email-label" for="email">email :</label>
          <br>
          <input type="email" id="signup-email-input" name="email" placeholder="darrenjunior44@gmail.com" required title="Input email">
          <br>
          <br>
          <label id="signup-password-label" for="password">password :</label>
          <br>
          <input type="password" id="signup-password-input" name="password" placeholder="example : daRReN123#$_" minlegth="8" required title="input password">
          <br>
          <div class="signup-first-options">
            <input type="checkbox" id="signup-remember-checkbox">
            <label for="signup-remember-checkbox" id="signup-remember-label">Remember me</label>
            <a href="https://myaccount.google.com/?hl=id" id="signup-forgot-password-link">forgot password?</a>
          </div>
          <div class="signup-second-options">
            <input type="checkbox" id="signup-agree-checkbox">
            <label for="signup-agree-checkbox" id="signup-agree-label">I agree to the Terms & Conditions and Privacy Policy</label>
          </div>
          <br>
          <input type="submit" value="SignUp" id="signup-submit-btn" name="submit-signup">
        </form>
      </div>
    </section>
  </main>
</body>
</html>