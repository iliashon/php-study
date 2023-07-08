<?php 
  if (mb_strlen($_POST["name"]) < 3) {
    echo 'Name must be more than 3 characters';
    exit;
  }
  if (mb_strlen($_POST["email"]) < 5) {
    echo 'Email must be more than 5 characters';
    exit;
  }
  if (mb_strlen($_POST["phone"]) < 10) {
    echo 'Phone number must be more than 10 characters';
    exit;
  }
  if (!isset($_POST["cars"])) {
    echo 'Select at least one car';
    exit;
  }
  if (count(explode(',', $_POST["films"])) < 2) {
    echo 'Please enter at least two favorite movies';
    exit;
  }
?>
<section class="result">
<h1>All info</h1>
<h4><?= $_POST["name"] ?></h4>
<h4><?= $_POST["email"] ?></h4>
<h4><?= $_POST["phone"] ?></h4>
<h2>Fav_cars:</h2>
<ul>
  <?php foreach($_POST["cars"] as $car) { ?>
    <li><?= $car ?></li>
  <?php } ?>
</ul>
<h2>Fav_films:</h2>
<ul>
  <?php foreach(explode(',', $_POST["films"]) as $film) { ?>
    <li><?= $film ?></li>
  <?php } ?>
</ul>
</section>
