<?php
// Caminho para o arquivo de banco de dados
$file = __DIR__ . '/database/arquivo.txt';

// Verifica se o arquivo existe
if (!file_exists($file)) {
    die("Erro: O arquivo 'arquivo.txt' não foi encontrado.");
}

// Tenta mudar a permissão para 777 (leitura, escrita e execução para todos)
if (chmod($file, 0777)) {
    echo "Permissão alterada com sucesso! <br>";
    echo "Agora tente registrar um chamado novamente.";
} else {
    echo "Falha ao alterar permissão. <br>";
    echo "Verifique se o Render permite essa modificação.";
}
?>
