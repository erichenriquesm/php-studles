<?php

include "../connection.php";


$sql = "SELECT * FROM users";

// $sql = "INSERT INTO users (name, email, cellphone) VALUES ('Eric Motta', 'eric@greenn.com.br', '+5544997504091')";

// $sql = "DELETE FROM users";

# exec executa um SQL e retorna quantas linhas foram afetadas.

# beginTransaction inicia uma transação.

# rollback desfaz a transação que foi realizada.

# commit mantém as alterações feitas pela transação.


$userData = [
    'name'      => 'Guilherme',
    'email'     => 'guilherme@gmail.com',
    'cellphone' => '+5559489484848'
];


try{
    $pdo->beginTransaction();
    // $rows = $pdo->exec($sql);
    // $results = $pdo->query($sql);

    $statement = $pdo->prepare("INSERT INTO users (name, email, cellphone) VALUES (:name, :email, :cellphone)");
    $statement->execute($userData);
    $pdo->commit();
    
    // echo "{$rows} linhas afetadas.";
    // foreach ($results as $result) {
    //     print_r($result);
    // }
}catch(\PDOException $e){
    $pdo->rollBack();
    // echo $e->getMessage();
    print_r($pdo->errorInfo());
}