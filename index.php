<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="submit.php" method="post">
    <input type="text" name="name">
    <label for="name">Name</label>
    <input type="text" name="email">
    <label for="email">Email</label>
    <input type="submit" value="Send">
  </form>
  <?php 
  if($_COOKIE['name'] != "" || $_COOKIE['email'] != "") {
    echo 'User name: ' . $_COOKIE['name'] . '<br>';
    echo 'User email: ' . $_COOKIE['email'] . '<br>';
  }
  ?>
</body>
</html>