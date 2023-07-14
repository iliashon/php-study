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

    // $login = 'code999';
    // $email = 'def@gmail.com';
    // $name = 'Milan';
    // $surname = 'Gribochev';

    // $sql = 'INSERT INTO users(email, name, surname, login) VALUES(:email, :name, :surname, :login);';
    // $query = $pdo->prepare($sql);
    // $query->execute(['login' => $login, 'name' => $name, 'surname' => $surname, 'email' => $email]);

    $id = 4;
    $login = 'new login';

    $sql = 'UPDATE `users` SET `login` = :login WHERE `id` = :id';
    $query = $pdo->prepare($sql); 
    $query->execute(['login' => $login, 'id' => $id]);

    ?>
</body>

</html>