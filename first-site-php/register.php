<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    $websiteTitle = 'Register';
    require "./blocks/head.php" 
    ?>
</head>

<body>

  <?php require "./blocks/header.php" ?>

  <main>
    <h1>Register</h1>
    <form action="/first-site-php/ajax/reg.php" method="post">
      <label for="username">Name</label>
      <input type="text" name="username" id="username">
       
      <label for="email">Email</label>
      <input type="email" name="email" id="email">

      <label for="login">Login</label>
      <input type="text" name="login" id="login">

      <label for="password">Password</label>
      <input type="password" name="password" id="password">

      <button type="submit">Register</button>
    </form>
  </main>

  <?php require "./blocks/aside.php" ?>

  <?php require "./blocks/footer.php" ?>

</body>

</html>