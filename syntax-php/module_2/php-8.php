<?php
echo "<h2>PHP 8</h2>";

// class Point {
//   public $x;
//   public $y;
//   public $z;

//   public function __construct($x, $y, $z) {
//     $this->x = $x;
//     $this->y = $y;
//     $this->z = $z;
//   }
// }

class Point
{
  public function __construct(public int|float $x = 0.0, public int|float $y = 0.0, public int|float $z = 0.0)
  {
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }
}

$zero = new Point(x: 4, z: 5, y: 8);
echo "Coordinat: " . $zero->x . ", " . $zero->y . ", " . $zero->z . '<br>';

$num = 9.34;
// switch ($num) {
//   case 5:
//     $result = "number";
//     break;
//   case "5":
//     $result = 'not a number';
//     break;
// }

// echo $result;

echo match($num) {
  '9.34' => "not a number",
  9.34 => "number",
};

$country = $session?->user?->getAddress()?->$country;