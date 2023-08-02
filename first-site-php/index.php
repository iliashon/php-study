<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $websiteTitle = 'Home';
    require "./blocks/head.php" 
    ?>
</head>

<body>

    <?php require "./blocks/header.php" ?>

    <main>
        <?php  
            require_once "lib/MySQL.php";

            $sql = 'SELECT * FROM articles ORDER BY `date` DESC';
            $query = $pdo->query($sql);
            while($row = $query->fetch(PDO::FETCH_OBJ)) {?>
                <div class='post'> 
                    <h2> <?= $row->title ?> </h2>
                    <p> <?= $row->anons ?> </p>
                    <p class='author'> Author: <span><?= $row->author ?></span> </p>
                    <a href='/'> READ </a>
                </div>
        <?php 
            }
        ?>
    </main>

    <?php require "./blocks/aside.php" ?>

    <?php require "./blocks/footer.php" ?>

</body>

</html>