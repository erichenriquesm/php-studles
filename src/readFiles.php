<?php


$file = fopen("./files/teste.txt", "r");

if($file){
    // while(($line = fgets($file)) !== false) {
    //     echo "{$line}\n";
    // }  

    echo fread($file, 20);
}

fclose($file);