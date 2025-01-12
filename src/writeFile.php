<?php

$newFile = fopen("./files/file.txt", "w");


fwrite($newFile, "Acabo de escrever um arquivo");

fclose($newFile);

echo "Arquivo escrito com sucesso!";