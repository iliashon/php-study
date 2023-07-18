<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $websiteTitle = 'Users list';
    require "./blocks/head.php"
    ?>
</head>

<body>

    <?php require "./blocks/header.php" ?>

    <main>
        <h1>Users list</h1>
        <?php
        require_once('./lib/MySQL.php');

        $sql = 'SELECT * FROM `users`';

        $query = $pdo->prepare($sql);

        if ($query->execute()) {
            foreach ($query->fetchAll(PDO::FETCH_OBJ) as $row) {
        ?>

                <div class="user_block">
                    <div class="user_info">
                        <h3><b>Name</b>: <?= $row->name ?></h3>
                        <h3><b>Login</b>: <?= $row->login ?></h3>
                    </div>
                    <button type="button" class="delete_user" id="<?= $row->id ?>">Delete</button>
                </div>

        <?php
            }
        }
        ?>
    </main>

    <?php require "./blocks/aside.php" ?>

    <?php require "./blocks/footer.php" ?>

    <script>
        $('.delete_user').click(function(event) {
            let id = event.target.id;

            $.ajax({
                url: 'ajax/delete_user.php',
                type: 'POST',
                cache: false,
                data: {
                    'id': id,
                },
                dataType: 'html',
                success: function(data) {
                        event.target.parentElement.style.display = 'none';
                }
            })
        });
    </script>

</body>

</html>