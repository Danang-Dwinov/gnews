<?php $categories = require __DIR__ . '/../config/category.php'; ?>
<nav class="home-nav">
  <ul class="home-nav-list">
    <?php foreach ($categories as $slug => $label): ?>
      <li>
        <button type="button" class="home-nav-link" id="nav-<?=$slug?>" data-target="page-<?=$slug?>">
          <?=htmlspecialchars($label)?>
        </button>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>