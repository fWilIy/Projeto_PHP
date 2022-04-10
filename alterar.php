<?php
include_once("conexao.php");
$id=filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_NUMBER_INT);
$nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$autor=filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$publi=filter_input(INPUT_POST, 'publi', FILTER_SANITIZE_STRING);
$edit=filter_input(INPUT_POST, 'edit', FILTER_SANITIZE_STRING);
$pag=filter_input(INPUT_POST, 'pag', FILTER_SANITIZE_STRING);
$resultBooks="UPDATE livros set nome='$nome', autor='$autor', publi='$publi', edit='$edit', pag='$pag' WHERE cod='$id'";
$alterBooks=mysqli_query($link, $resultBooks);

if (!$alterBooks){
    echo("Alteração não pôde ser realizada");}
else{
    echo("Alteração feita com sucesso."."<br>");}
?>
<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Alterar</title>
    </head>
    <body>
        <a href="index.html"><button>Voltar para cadastro.</button></a>
        <a href="listar.php"><button>Ver registros</button></a>
    </body>
</html>