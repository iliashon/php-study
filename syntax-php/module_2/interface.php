<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
  interface Numan {
    public function talk();
    public function walk();
  }

  interface Mutant extends Numan {
    public function fly();
  }

  class Person implements Mutant {
    function talk() {
      echo "talk";
    }

    function walk() {
      echo "walk";
    }
    function fly() {
      echo "fly";
    }
  }

  $bob = new Person();
  $bob->talk();
  $bob->walk();

  trait PrintSome {
    public function tic() {
      echo "tic tic";
    }

    public function good() {
      echo 'good';
    }
  }

  class Test {
    use PrintSome;
  }

  $obj = new Test();
  $obj->good();
  $obj->tic();

  abstract class Car {
    protected $speed;
    protected $color;

    abstract protected function showInfo(); 
  }

  class BMW extends Car {
    function __construct($speed) {
      $this->speed = $speed;
    }
    public function showInfo() {
      echo "Speed: " . $this->speed;
    }
  }

  $m3 = new BMW(240);
  $m3->showInfo();
  ?>
</body>
</html>
