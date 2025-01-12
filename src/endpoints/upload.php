<?php
// Verifica se o arquivo foi enviado

if (isset($_FILES['arquivo']) && !$_FILES['arquivo']['error']) {
    $arquivoTmp = $_FILES['arquivo']['tmp_name']; // Caminho temporário do arquivo
    $nomeArquivo = basename($_FILES['arquivo']['name']); // Nome original do arquivo
    $tamanhoArquivo = $_FILES['arquivo']['size']; // Tamanho do arquivo
    $tipoArquivo = $_FILES['arquivo']['type']; // Tipo MIME do arquivo
    $diretorioDestino ='../uploads/'; // Pasta de destino

    // Cria o diretório de destino, se não existir
    if (!is_dir($diretorioDestino)) {
        mkdir($diretorioDestino, 0755, true);
    }

    // Define o caminho completo do arquivo de destino
    $caminhoDestino = $diretorioDestino . $nomeArquivo;

    // Move o arquivo para o diretório de destino
    if (move_uploaded_file($arquivoTmp, $caminhoDestino)) {
        echo "Upload concluído com sucesso! Arquivo salvo em: " . $caminhoDestino;
    } else {
        echo "Erro ao mover o arquivo para o diretório de destino.";
    }
} else {
    echo "Erro no upload do arquivo.";
}
