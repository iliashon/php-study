<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Blog</title>
</head>

<body>

  <?php
    class User {
      public $name = "Default";
      private $surname = "None";
      private $email;
      private $login;
      private $pass;
    }

    $admin = new User();
    $admin->name = "Jhon";
    echo $admin->name;
  ?>

</body>

</html>