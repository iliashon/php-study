<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<body>
    <?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'php-education';

    $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_db;

    $pdo = new PDO($dsn, $db_user, $db_password);

    // $query = $pdo->query("SELECT * FROM `users`");

    // $query = $pdo->query("SELECT * FROM `users` LIMIT 2");

    $query = $pdo->query("SELECT * FROM `users` ORDER BY `id` DESC LIMIT 2");

    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo $row->login . '<br>';
    }
    
    $name = 'Alex';
    $sql = 'SELECT `login`, `email` FROM `users` WHERE `name` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$name] );
    $users = $query->fetchAll(PDO::FETCH_OBJ);
    var_dump($users);

    ?>
</body>

</html>