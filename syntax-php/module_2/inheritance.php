<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
  class Car {
    public $speed;
    protected $wheels;
    protected $color;

    function __construct($speed, $color) {
      $this->speed = $speed;
      $this->color = $color;
    }

    function showInfo() {
      echo "Speed car: " . $this->speed . '<br>';
    }
  }

  class BMW extends Car {
    private $model;

    function __construct($speed, $color, $model) {
      parent::__construct($speed, $color);
      $this->model = $model;
    }
    function showInfo() {
      echo "Speed car: " . $this->speed . '<br>';
      echo "Model car: " . $this->model . '<br>';
      echo "Color car: " . $this->color . '<br>';
    }
  }

  class Audi extends Car {}

  $m3 = new BMW(340, "black", "m3");
  $m3->showInfo();
  ?>
</body>
</html>