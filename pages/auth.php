<?php
require_once __DIR__ . '/../config/database.php';
session_start();

$signup_message ="";
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
    header("Location: /");
    exit();
  } else{
    header("Location: /auth");
    exit();
  }
}

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
        
        $_SESSION['login-succeed-message'] = "Login succeed";
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <?php require_once __DIR__ . "/../components/header.php";?>
  <main>
    <section class="login-page" id="login-page">
      <div class="container-main" align="center">
        <div class="main-list-form" id="main-list-form">
          <button id="opsi-login">Log In</button>
          <button id="opsi-signup">Sign Up</buttom>
        </div>
        <form method="POST" action="/auth" id="form-login">
          <?php if (isset($_SESSION['pesan'])):?>
            <p id="logout-message"><?=$_SESSION['pesan']?></p>
            <?php unset($_SESSION['pesan']);?>
          <?php endif; ?>
          <br>
          <label id="login-username-label" for="username">username :</label>
          <br>
          <input type="text" id="login-username-input" name="username" placeholder="darren" required title="Input username">
          <br>
          <?php if(isset($_SESSION['login-username-message'])):?>
            <div class="message-auth">
              <i id="text-message-auth"><?=htmlspecialchars($_SESSION['login-username-message'])?></i>
              <i id="icon-message-auth" class="fa-solid fa-circle-xmark"></i>
            </div>
            <?php unset($_SESSION['login-username-message']);?>
          <?php endif;?>
          <br>
          <label id="login-email-label" for="email">email :</label>
          <br>
          <input type="email" id="login-email-input" name="email" placeholder="darrenjunior44@gmail.com" required title="Input email">
          <br>
          <?php if(isset($_SESSION['login-email-message'])):?>
            <div class="message-auth">
              <i id="text-message-auth"><?=htmlspecialchars($_SESSION['login-email-message'])?></i>
              <i id="icon-message-auth" class="fa-solid fa-circle-xmark"></i>
            </div>
            <?php unset($_SESSION['login-email-message']);?>
          <?php endif;?>
          <?php if(isset($_SESSION['login-email-format-message'])):?>
            <div class="message-auth">
              <i id="text-message-auth"><?=htmlspecialchars($_SESSION['login-email-format-message'])?></i>
              <i id="icon-message-auth" class="fa-solid fa-circle-xmark"></i>
            </div>
            <?php unset($_SESSION['login-email-format-message']);?>
          <?php endif;?>
          <br>
          <label id="login-password-label" for="password">password :</label>
          <br>
          <input type="password" id="login-password-input" name="password" placeholder="example : daRReN123#$_" minlegth="8" title="input password">
          <?php if(isset($_SESSION['login-password-message'])):?>
            <div class="message-auth">
              <i id="text-message-auth"><?=htmlspecialchars($_SESSION['login-password-message'])?></i>
              <i id="icon-message-auth" class="fa-solid fa-circle-xmark"></i>
            </div>
            <?php unset($_SESSION['login-password-message']);?>
          <?php endif;?>
          <div class="password-checkbox">
            <input type="checkbox" id="password-show-label"onclick="showPassword()">
            <label for="password-show-checkbox" id="password-show-label" >Show password</label>
          </div>
          <div class="login-options">
            <input type="checkbox" id="login-remember-checkbox">
            <label for="login-remember-checkbox" id="login-remember-label">Remember me</label>
            <a href="https://myaccount.google.com/?hl=id" id="login-forgot-password-link">forgot password?</a>
          </div>
          <input type="submit" value="Login" id="login-submit-btn" name="submit-login">
          <a href="/" class="back-home"> <i class="fa-solid fa-arrow-left"></i> Back to Home</a>
        </form>
        <form method="POST" action="/auth" id="form-signup">
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
          <input type="password" id="signup-password-input" name="password" placeholder="example : daRReN123#$_" minlength="8" required title="input password">
          <br>
          <div class="password-checkbox">
            <input type="checkbox" id="password-show-label"onclick="showPassword()">
            <label for="password-show-checkbox" id="password-show-label" >Show password</label>
          </div>
          <div class="signup-second-checkbox">
            <input type="checkbox" id="signup-remember-checkbox">
            <label for="signup-remember-checkbox" id="signup-remember-label">Remember me</label>
            <a href="https://myaccount.google.com/?hl=id" id="signup-forgot-password-link">forgot password?</a>
          </div>
          <div class="signup-thred-checkbox">
            <input type="checkbox" id="signup-agree-checkbox">
            <label for="signup-agree-checkbox" id="signup-agree-label">I agree to the Terms & Conditions and Privacy Policy</label>
          </div>
          <input type="submit" value="SignUp" id="signup-submit-btn" name="submit-signup">
          <a href="/" class="back-home"> <i class="fa-solid fa-arrow-left"></i> Back to Home</a>
        </form>
      </div>
    </section>
  </main>
  <script src="../assets/js/pages/auth.js"></script>
</body>
</html>