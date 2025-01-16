<?php

include "../connection.php";

try {
    $html = "<script>alert('Ataque XSS')</script>";
    # strip_tags remove tags HTML
    # htmlentities converte tags para padrão UNICODE
    print_r([
        'strip_tags' => strip_tags($html) . "<br>",
        'htmlentities' => htmlentities($html),
    ]);
} catch(\PDOException $e){
    echo $e->getMessage();
}