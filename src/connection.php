<?php

$servername = "db";  # Nome do serviço MySQL no Docker Compose (ou IP do servidor)
$username = "eric";  # Nome do usuário do banco de dados
$password = "root";  # Senha do usuário
$dbName = "my_database";  # Nome do banco de dados

$pdo = new PDO("mysql:host={$servername}; dbname={$dbName}; charset=UTF8", $username, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);