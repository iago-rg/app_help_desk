<?php
session_start();

foreach($_POST as $key => $value){
    $dados[$key] = str_replace('#', '-', $value);
}
$texto = $_SESSION['id'].'#'.implode('#', $dados) .PHP_EOL;

$arquivo = fopen('arquivo.txt','a');
fwrite($arquivo,$texto);
fclose($arquivo);

header('Location: abrir_chamado.php')

    
?>