<?php

$_SESSION['name'] = 'Eric';


if(!isset($_COOKIE['userName'])){
    setcookie('userName', 'Eric', time() + 3600);
}


print_r($_COOKIE['userName']);




