    <?php
    $id = $_POST['id'];

    require_once('../lib/MySQL.php');

    $sql = 'DELETE FROM `users` WHERE `users`.`id` = ?;';

    $query = $pdo->prepare($sql);

    $query->execute([$id]);
