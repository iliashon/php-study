<?php
  $str = "Пример обычной строки";

  echo strlen($str) . '<br>';
  echo strpos($str, "При") === false ? '\'При\' не найдено' : '\'При\' найдено';
  echo '<br>';
  echo substr($str, 4, -2) . '<br>';
  echo mb_strtolower($str) . '<br>' . mb_strtoupper($str) . '<br>';
  echo trim("       <pre>просто    текст с пробелами</pre>      ");
?>
