<?php

include "../connection.php";

try {
    $sql = 'SELECT * FROM users';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rows = $stmt->rowCount();
    echo "{$rows} registros";
} catch(\PDOException $e){
    echo $e->getMessage();
}