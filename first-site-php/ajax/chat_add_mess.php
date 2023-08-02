<?php
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
    $mess = trim(filter_var($_POST['mess'], FILTER_SANITIZE_SPECIAL_CHARS));

    $error = '';
    if (strlen($username) < 2) {
        $error = 'Name invalid';
    } else if (strlen($mess) < 5) {
        $error = 'Message invalid';
    }

    if ($error != '') {
        echo $error;
        exit();
    }

    require_once('../lib/MySQL.php');

    $sql = 'INSERT INTO chat(username, mess) VALUES(?, ?)';

    $query = $pdo->prepare($sql);

    $query->execute([$username, $mess]);

    echo 'Done';