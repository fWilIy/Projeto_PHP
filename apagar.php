<?php
include_once("conexao.php"); //ou require_once("conexao.php");
$id=filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT);
$deleteBooks="delete from livros where cod='$id';";
$resultado=mysqli_query($link,$deleteBooks);
if(!$deleteBooks){
    echo("Livro não deletado.");}
else{
    echo("Livro deletado com sucesso.<br>");}
?>

 <!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Apagar</title>
    </head>
    <body>
        <a href="index.html"><button>Voltar para cadastro.</button></a>
        <a href="listar.php"><button>Ver livros registrados</button></a>
    </body>
</html>