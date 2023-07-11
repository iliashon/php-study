<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Blog</title>
</head>

<body>

  <?php
    class User {
      const PASS = "password";
      public $name = "Default";
      private $surname = "Tupalski";
      private $email;
      private $login;
      private $pass;
      function __construct($name, $surname, $login) {
        $this->name = $name;
        $this->surname = $surname;
        $this->login = $login;

        echo self::PASS . '<br>';

        $this->showAll("User: ");
      }
      function showAll($text) {
        echo $text . $this->surname . $this->name . $this->login . '<br>';
      }
      function __destruct() {
        print('Delete' . __CLASS__ . '<br>');
      }
    }

    $admin = new User("Jhon ", "Tuplaksi ", "Admin ");
  ?>

</body>

</html>