<?php
include "../connection.php";

$name = "Miguel";
$email = "miguel@gmail.com";
$cellphone = "+55999999999";

// $stmt = $pdo->prepare("INSERT INTO users (name, email, cellphone) VALUES (:name, :email, :cellphone)");

// $stmt->bindParam(':name', $name, PDO::PARAM_STR);
// $stmt->bindParam(':email', $email, PDO::PARAM_STR);
// $stmt->bindParam(':cellphone', $cellphone, PDO::PARAM_STR);

// $result = $stmt->execute();


$stmt2 = $pdo->prepare("INSERT INTO users (name, email, cellphone) VALUES (:name, :email, :cellphone)");

$stmt2->bindValue(':name', $name, PDO::PARAM_STR);
$stmt2->bindValue(':email', $email, PDO::PARAM_STR);
$stmt2->bindValue(':cellphone', $cellphone, PDO::PARAM_STR);

$result = $stmt2->execute();


echo "{$result} linhas afetadas";