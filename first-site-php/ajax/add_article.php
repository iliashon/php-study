<?php
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS));
    $anons = trim(filter_var($_POST['anons'], FILTER_SANITIZE_EMAIL));
    $full_text = trim(filter_var($_POST['full_text'], FILTER_SANITIZE_SPECIAL_CHARS));

    $error = '';
    if (strlen($title) < 2) {
        $error = 'Name invalid';
    } else if (strlen($anons) < 5) {
        $error = 'Anons invalid';
    } else if (strlen($full_text) < 5) {
        $error = 'full_text invalid';
    } 

    if ($error != '') {
        echo $error;
        exit();
    }

    require_once('../lib/MySQL.php');


    $sql = 'INSERT INTO articles(title, anons, full_text, date, author) VALUES(?, ?, ?, ?, ?)';

    $query = $pdo->prepare($sql);

    $query->execute([$title, $anons, $full_text, time(), $_COOKIE['login']]);

    echo 'Done';