<?php
  include 'template/header.php';
?>
  <form method="post">
    <input type="text" name="name" placeholder="Name of person">
    <input type="submit" value="Add person">
  </form>
  <?php
  foreach ($users as $user) {
      ?>
    <p> My name is : <?= $user->getName(); ?></p>
    <p>I took some damage : <?= $user->getDamage(); ?></p>

 <?php
  }
   include 'template/footer.php'; ?>
