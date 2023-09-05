<?php

include "conexlogin.php";

$senha = $_POST['senha'];

$sql = "UPDATE `senha` SET `senha`='$senha' WHERE 1";

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

<br><br>
<center><h1>Senha alterada com sucesso.</h1></center>
<br>
<a href="logindologin.php" role="button" class="btn btn-sm">Voltar ao Login</a>
</div>
</body>
</html>




