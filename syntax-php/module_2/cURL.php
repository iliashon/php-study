<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>cUrl</title>
</head>
<body>
  <?php
  // $curl = curl_init();
  // curl_setopt($curl, CURLOPT_URL, 'https://itproger.com');
  // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  // $result = curl_exec($curl);

  // $section = explode('<section class="first-section container">', $result);

  // $section_2 = explode('</section>', $section[1]);

  // print_r($section_2[0]);

  // curl_close($curl);

  $curl = curl_init();

  $params = array('name' => 'cookie_set');
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost/cookie.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($params)
  ));

  $result = curl_exec($curl);

  curl_close($curl);
  echo $_COOKIE['myCookie'];
  ?>
</body>
</html>
