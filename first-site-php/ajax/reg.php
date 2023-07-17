<?php
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));

    $error = '';
    if (strlen($username) < 2) {
        $error = 'Name invalid';
    } else if (strlen($email) < 5) {
        $error = 'Email invalid';
    } else if (strlen($password) < 5) {
        $error = 'Password invalid';
    } else if (strlen($login) < 3) {
        $error = 'Login invalid';
    }

    if ($error != '') {
        echo $error;
        exit();
    }

    $user = 'root';
    $pass = 'root';
    $host = 'localhost';
    $db_name = 'first-site-php';
    $port =  3306;

    $password = md5($password);

    $dsn = 'mysql:host=' . $host . ';dbname=' . $db_name . ';port=' . $port;
    $pdo = new PDO($dsn, $user, $pass);

    $sql = 'INSERT INTO users(name, email, login, password) VALUES(?, ?, ?, ?)';

    $query = $pdo->prepare($sql);

    $query->execute([$username, $email, $login, $password]);

    echo 'Done';