<?php
    require_once('../lib/MySQL.php');

    $sql = 'SELECT * FROM chat ORDER BY id ASC';

    $query = $pdo->query($sql);

    $query->execute();

    while($row = $query->fetch(PDO::FETCH_OBJ)) {
      echo "<div class='mess-user'>
              <h4> $row->username </h4>
              <p> $row->mess </p>
            </div>";
    }