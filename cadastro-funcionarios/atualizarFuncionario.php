<?php

include "conex.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];


$sql = "UPDATE `funcionarios` SET `nome`='$nome',`email`='$email',`senha`='$senha',`telefone`='$telefone' WHERE idFuncionario = $id";

$atualizar = mysqli_query($conexao, $sql);

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
    background-image: url(../img/velacanto.png);
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
   
    color: pink;
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
<nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand"><img src="../img/lumiereicon.png" alt="icone" width="5%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 53%;">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../telainicialFuncionario.php">Home</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="../sobrenosFuncionario.html">Sobre nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../contatosFuncionario.html">Contatos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../php - produtos/tabela.php">Produtos Cadastrados</a>
                </li>
                <li class="nav-item">
              <a class="nav-link" href="../php - produtos/cadastrarproduto.php">Cadastrar produtos</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="tabelaFuncionario.php">Funcionários cadastrados</a>
                </li>
              </ul>
              <nav class="navbar navbar-light">
              </nav>
            </div>
            <div class="d-flex">
              <a href="../cadastro-login/sair.php" class="btn btn-danger">Sair</a>
            </div>
          </nav>
<br><br>
<center><h1>Cadastro alterado com sucesso.</h1></center>

<br>

<a href="../formulario.php" role="button" class="btn btn-sm">Cadastrar novo funcionário</a>

<a href="tabelaFuncionario.php" role="button" class="btn btn-sm ">Voltar à tela de cadastros</a>
</body>
</html>