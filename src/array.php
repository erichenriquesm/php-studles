<?php

$indexedArray = [1, 2, 3, 5, 8];

$associativeArray = [
    'name'      => 'Eric Motta',
    'email'     => 'eric@greenn.com.br',
    'cellphone' => '44997504091'
];

if(array_key_exists('namex', $associativeArray)){
    echo 'A propriedade existe';
}else {
    echo 'A propriedade não existe';
}