<?php
  $x = true;
  echo 'Цифра ли? ' . is_numeric($x) . '<br>';
  echo 'Целое ли число? ' . is_integer($x) . '<br>';
  echo 'Дробное ли число? ' . is_double($x) . '<br>';
  echo 'Является ли переменная строкой? ' . is_string($x) . '<br>';
  echo 'Является ли переменная Boolean? ' . is_bool($x) . '<br>';
  echo 'Является ли переменная массивом? ' . is_array($x) . '<br>';
  echo 'Проверяет тип переменной - ' . gettype($x) . '<br>';
?>
