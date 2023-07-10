<?php
  $arr = [5, 7, 2, 89.2, 8];
  $arr_new = [6, 81, 3];
  echo count($arr) . '<br>';
  print_r($arr);
  echo '<br>';

  unset($arr[2]);
  echo in_array(2, $arr) ? "Да, есть" : "Нет такого";
  echo '<br>';

  $arr_merge = array_merge($arr, $arr_new);
  print_r($arr_merge);
  echo '<br>';

  $arr_slice = array_slice($arr_merge, 0, 3);
  print_r($arr_slice);
  echo '<br>';

  rsort($arr);
  print_r($arr);
  echo '<br>';

  $arr_1 = ["q" => 102, "b" => 56, "c" => 87];
  ksort($arr_1);
  print_r($arr_1);
  echo '<br>';

  shuffle($arr);
  print_r($arr);
  echo '<br>';
?>
