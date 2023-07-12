<?php
  class Base {
    private $name = 'same';
    function __construct() {
      echo "object is created<br>";
    }

    function __get($name) {
      echo "Property: $name <br>";
    }

    function __set($name, $value) {
      echo "Property: <b>$name</b>. Value: $value<br>";
    }

    function __isset($name) {
      echo "Property: $name <br>";
    }

    // function __call($name, $arg) {
    //   echo "method: <b>$name</b><br>";
    //   print_r($arg);
    //   echo "<br>";
    // }

    static function __callStatic($name, $arg) {
      echo "method: <b>$name</b><br>";
      print_r($arg);
      echo "<br>";
    }

    function __toString() {
      return "Object nas name: $this->name";
    }

    function __destruct() {
      echo "Object is delete<br>";
    }
  }

  $obj = new Base();
  echo $obj."<br>";
  isset($obj->age);
  Base::print("dfd", true);
  $obj->name = 'colocol';
  $obj->name;