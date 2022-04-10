<?php
include_once("conexao.php");
$nome= filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$autor= filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$publi= filter_input(INPUT_POST, 'publi', FILTER_SANITIZE_STRING);
$edit= filter_input(INPUT_POST, 'edit', FILTER_SANITIZE_STRING);
$pag= filter_input(INPUT_POST, 'pag', FILTER_SANITIZE_STRING);
$inserirDados="insert into livros (nome, autor, publi, edit, pag) values ('$nome', '$autor', '$publi', '$edit', '$pag')";
$resultado=mysqli_query($link,$inserirDados);
if(!$resultado){
    echo("Livro não cadastrado.");}
else{
    echo("Livro cadastrado com sucesso.");}
?>
<br>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Inclusão de livros no Banco de Dados
        </title>
    </head>
    <body>
        <a href="index.html"><button>Voltar para o cadastro</button></a>
        <a href="listar.php"><button>Ver registros</button></a>
    </body>

</html>