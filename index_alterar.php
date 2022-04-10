
<?php
include_once("conexao.php");
$id=filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT);
$resultBooks="select * from livros WHERE cod='$id'";
$alterBooks=mysqli_query($link, $resultBooks);
$changeBooks=mysqli_fetch_array($alterBooks); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alteração de livros no BD</title>
    <link href="form_book2.css" rel=stylesheet media="screen">
</head>
<body>
    <div id="formulario">
        <form id="form" name="nome" method="post" class="card" action="alterar.php">
            <h1> Alterando livros no BD </h1>
            <input type="hidden" name="cod" value="<?php echo($changeBooks['cod']); ?>">
            Nome:<br>
            <input type="text" name="nome" placeholder="Digite o nome do livro" required="required" value="<?php echo($changeBooks['nome']); ?>">
            <br><br>
            Autor:<br>
            <input type="text" name="autor" placeholder="Digite o autor" required="required" value="<?php echo ($changeBooks['autor']); ?>">
            <br><br>
            Publicado em:<br>
            <input type="text" name="publi" placeholder="Digite a data de publicação" value="<?php echo ($changeBooks['publi']); ?>">
            <br><br>
            Editora:<br>
            <input type="text" name="edit" placeholder="Digite a editora" value="<?php echo ($changeBooks['edit']); ?>">
            <br><br>
            Nº de pág.:<br>
            <input type="text" name="pag" placeholder="Digite o nº de pág" value="<?php echo ($changeBooks['pag']); ?>">
            <br><br>
            <button type="submit" name="cadastrar" id="btn">Alterar</button><br>
            <a href="index.html"><button>Voltar para o cadastro.</button></a><br>
            <a href="listar.php"><button>Ver registros.</button></a>
        </form>
    </div>
</body>
</html>