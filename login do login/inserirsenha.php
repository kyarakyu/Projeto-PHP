<?php

include "conexlogin.php";

$senha = $_POST['senha'];

$sql = "INSERT INTO `senha`(`senha`) VALUES ('$senha')";

$adicionar = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class="container" style="width: 300px">

    <h4>Senha cadastrada com sucesso.</h4>
    <div style="padding-top: 20px">

</div>

    </div>