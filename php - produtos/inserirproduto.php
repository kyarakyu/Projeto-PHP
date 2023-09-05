<?php

include "conexao.php";

$nomeProduto = $_POST['nomeProduto'];
$volume = $_POST['volume'];
$preco = $_POST['preco'];
$tipoProduto = $_POST['tipoProduto'];


$sql = "INSERT INTO `produtos`(`nomeProduto`, `volume`, `preco`, `tipoProduto`) VALUES ('$nomeProduto','$volume','$preco','$tipoProduto')";

$adicionar = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumiére</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="icon" href="../img/CC_20230209_103124.png">
</head>
<body>
<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: url("../img/velacanto.png");
}
.navbar{
    background-color: #E5DCDF;
}
.navbar-toggler-icon{
    background-color: #e0c8d0;
}
.navbar-nav {
  margin-left: -130%;
}
h1 {
    font-size: 60px;
    font-family: Arial, Helvetica, sans-serif;
    
    color: #000;
    text-shadow: none;
    border: none;
}
.btn-sm {
    margin-left: 32%;
    margin-right: -20%;
    border-radius: 5px;
    background-color: #DDA0DD;
    color: #fff;
    border: none;
}
.btn-sm:hover {
    background-color:  #E5DCDF;
    color: #000;
}
</style>


<center><br><br><h1 style="color: pink">Produto adicionado com sucesso.</h1></center>

<br>

<a href="cadastrarproduto.php" role="button" class="btn btn-sm">Cadastrar novo produto</a>

<a href="tabela.php" role="button" class="btn btn-sm ">Voltar à tela de produtos</a>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
      