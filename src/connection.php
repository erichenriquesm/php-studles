<?php

$servername = "db";  // Nome do serviço MySQL no Docker Compose (ou IP do servidor)
$username = "eric";  // Nome do usuário do banco de dados
$password = "root";  // Senha do usuário
$dbname = "my_databasex";  // Nome do banco de dados

try {
    // Estabelece a conexão usando PDO
    $dsn = "mysql:host=$servername;dbname=$dbname";  // DSN (Data Source Name)
    $pdo = new PDO($dsn, $username, $password);

    // Definindo o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado com sucesso ao banco de dados!";
} catch (PDOException $e) {
    // Caso ocorra erro na conexão, exibe a mensagem de erro
    echo "Erro de conexão: " . $e->getMessage();
}
?>
