<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Orders</title>
</head>

<body>
    <?php
    class CreateOrders
    {
        private $db_password = 'root';
        private $db_host = 'localhost';
        private $db_user = 'root';
        private $db_db = 'simple';
        public $query;

        function addOrder($user_id, $item_id)
        {
            $dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_db;

            $pdo = new PDO($dsn, $this->db_user, $this->db_password);

            $sql = 'INSERT INTO `orders`(user_id, item_id) VALUES( :userId, :itemId);';

            $query = $pdo->prepare($sql);

            $query->execute(['itemId' => $item_id, 'userId' => $user_id,]);;
        }
        function showAllOrders()
        {
            $dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_db;

            $pdo = new PDO($dsn, $this->db_user, $this->db_password);
        
            $query = $pdo->query("SELECT * FROM `orders`");

            echo "<h2>All orders</h2>";

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $this->checkNameById($row->user_id, 'users', 'login');
                $this->checkNameById($row->item_id, 'items', 'title');
                echo '<br>';
            }
        }
        function checkNameById($id, $table, $select) {
            $dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_db;

            $pdo = new PDO($dsn, $this->db_user, $this->db_password);
        
            $query = $pdo->query("SELECT `$select` FROM `$table` WHERE `id` = $id");

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                if ($table === 'users') {
                    echo "<b>$row->login</b>" . ' -- ';
                } else {
                    echo "<u>$row->title</u>";
                }
            }
        }
    }

    $db_obj = new CreateOrders();
    $db_obj->addOrder('2', '3');
    $db_obj->addOrder('3', '2');
    $db_obj->addOrder('1', '4');
    $db_obj->addOrder('3', '1');
    $db_obj->addOrder('2', '4');
    $db_obj->showAllOrders();
    ?>
</body>

</html>