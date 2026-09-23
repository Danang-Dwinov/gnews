<?php
include __DIR__ . '/../controllers/HomeControllers.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GNews</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <?php include __DIR__ . '/../components/header.php';?>
  <main>
    <section class="home-page" id="home-page">
      <?php require_once __DIR__ . "/../components/navbar.php";?>
      <?= listContentHome($categories, $newsByCategory);?>
    </section>
  </main>
  <?php require_once __DIR__ . "/../components/footer.php";?>
  <script type="module" src="../assets/js/pages/home.js"></script>
</body>
</html>