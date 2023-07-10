<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Blog</title>
</head>

<body>

  <?php
  date_default_timezone_set('Asia/Tbilisi');
  echo time() . '<br>';
  $date = date('H:i:s');
  echo $date . '<br>';

  $date_now = new DateTime();
  $date_now->modify('+1 hour');
  echo $date_now->format('H:i:s');
  ?>

</body>

</html>