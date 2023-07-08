<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Blog</title>
</head>

<body>

  <?php
    // Вывод чего либо на страницу
    echo 'Hello' . '<br>ilya';
    // переменные php
    $number = 3; // integer
    $num = 4.6; // float
    $word = 'text content';
    echo '<br>Number:' . $number . '<br>';
    // const default 
    echo 'php version:' . PHP_VERSION . '<br>';
    // method defined response true || false 
    echo defined("PHP_VERSION");
    // method create const 
    define("PI", 3.14);
    echo defined("PI");
  ?>

</body>

</html>