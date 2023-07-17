<?php
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));

    $error = '';
    if (strlen($password) < 5) {
        $error = 'Password invalid';
    } else if (strlen($login) < 3) {
        $error = 'Login invalid';
    }

    if ($error != '') {
        echo $error;
        exit();
    }

    require_once('../lib/MySQL.php');

    $password = md5($password);

    $sql = 'SELECT id FROM users WHERE `login` = ? AND `password` = ?';

    $query = $pdo->prepare($sql);

    $query->execute([$login, $password]);

    if($query->rowCount() == 0) {
      echo 'Error, goodbye';
    } else {
      setcookie('log', $login, time() + 3600 * 24 * 30, "/");
      echo 'Done';
    }