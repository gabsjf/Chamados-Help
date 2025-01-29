<?php
session_start();
$titulo = str_replace('#','-',$_POST['titulo']);
$categoria = str_replace('#','-',$_POST['categoria']);
$descricao = str_replace('#','-',$_POST['descricao']);
$texto =$_SESSION['id']. '#'. $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;
$caminho_arquivo = $_SERVER['DOCUMENT_ROOT'] . '/app_help_desk/arquivo.txt';
$arquivo = fopen($caminho_arquivo, 'a');
fwrite($arquivo, $texto);
fclose($arquivo);

echo 'arquivo criado suave';

header('location:abrir_chamado.php');
?>