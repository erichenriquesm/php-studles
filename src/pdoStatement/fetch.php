<?php

include "../connection.php";

$sql = "SELECT name, email, cellphone FROM users ORDER BY name ASC";

$stmt = $pdo->prepare($sql);
$stmt->execute();

// print_r($stmt->fetch(PDO::FETCH_ASSOC));

// $users = $stmt->fetchAll(PDO::FETCH_OBJ);

// foreach ($users as $user) {
//     echo($user->name);
//     echo "<br>";
// }

// while ($name = $stmt->fetchColumn()) {
//     echo "$name <br>";
// }

// print_r($stmt->fetchColumn());


// while ($user = $stmt->fetchObject()) {
//     print_r($user);
//     echo "<br>";
// }