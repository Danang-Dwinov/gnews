<?php if(isset($_SESSION['login-notif-message'])):?>
  <div class="notif">
    <p id="text-notif-message">
      <?=htmlspecialchars($_SESSION['login-notif-message'] )?>
    </p>
    <i id="icon-notif" class="fa-solid fa-circle-check"></i>
  </div>
  <?php unset($_SESSION["login-notif-message"]);?>
<?php endif; ?>