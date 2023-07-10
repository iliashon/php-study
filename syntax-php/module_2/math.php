<?php
  $some = -15;
  echo abs($some) . '<br>';
  $num = 23.14;
  echo round($num) . '<br>';
  echo ceil($num) . '<br>';  /*  всегда округляет число в большую сторону */
  echo floor($num) . '<br>'; /* всегда округляет число в меньшую сторону*/

  echo mt_rand(7, 200) . '<br>';
  $arr = [12, 23, -2, -5, 19, -4, 0];
  echo min($arr) . '<br>';
  echo max(12, 23, -2, -5, 19, -4, 0) . '<br>';

  $z = 1;
  echo sin($z) . '<br>';  /* выдает sin этого числа */
  echo cos($z) . '<br>';  /* выдает cos этого числа */
  echo tan($z) . '<br>';  /* выдает tan этого числа */
  echo 1 / tan($z) . '<br>'; /* выдает ctg этого числа */
?>
