<?php
    session_start();

// print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['senha']))
{
    include_once('conexlogin.php');
    $senha = $_POST['senha'];

    // print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM senha WHERE senha = '$senha'";

    $result = $conexao->query($sql); 

    // print_r($sql);
    // print_r($result);

    if(mysqli_num_rows($result) < 1) {
        unset($_SESSION['senha']);
       header('Location: logindologin.php');
    }
    else {
        $_SESSION['senha'] = $senha;
       header('Location: ../cadastro-login/login.php');
    }
}
else
{    
    header('Location: logindologin.php');
}

?>