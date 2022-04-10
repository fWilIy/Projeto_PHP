<?php
include_once("conexao.php"); //ou require_once("conexao.php");
$listData= "select * from livros;";
$resultado=mysqli_query($link, $listData);
while($listBooks=mysqli_fetch_array($resultado)){
    echo("<hr>Nº de registro do livro: ".$listBooks['cod']."<br>");
    echo("Nome: ".$listBooks['nome']."<br>");
    echo("Autor: ".$listBooks['autor']."<br>");
    echo("Data de Publicação: ".$listBooks['publi']."<br>");
    echo("Editora: ".$listBooks['edit']."<br>");
    echo("Nº de Páginas: ".$listBooks['pag']."<br>");
    echo("<a href='apagar.php?cod=".$listBooks['cod']."'><button>Apagar</button></a>");
    echo("<a href='index_alterar.php?cod=".$listBooks['cod']."'><button>Alterar</button></a><br>");
}

?>
 <!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Listar</title>
        <hr>
    </head>
    <body>
        <a href="index.html"><button>Ir para cadastro</button></a>
    </body>
</html>