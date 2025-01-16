<?php

include "../connection.php";

try {
    $sql = 'SELECT id, name, email, cellphone FROM users';
    $stmt = $pdo->prepare($sql);
    $stmt->bindColumn('id', $id);
    $stmt->bindColumn('name', $name);
    $stmt->bindColumn('email', $email);
    $stmt->bindColumn('cellphone', $cellphone);
    $stmt->execute();
    
    while($row = $stmt->fetch(PDO::FETCH_BOUND)){
        print_r([
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'cellphone' => $cellphone,
        ]);

        echo "<br>";
    }
} catch(\PDOException $e){
    echo $e->getMessage();
}