<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="../css/login.css">
    <style>
        body{
            background-image: url(../img/sabonetes.png);
            font-family: Arial, Helvetica, sans-serif;
           
        }
        div{
            background-color: #EDB7C4;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            width: 250px;
            padding: 15px;
            border: none;
            border-radius:10px;
            outline: none;
            font-size: 15x;

        }
        .inputSubmit{
            background-color:  #a77fa3;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: purple;
            cursor: pointer;
        }
        .a {
            padding: 7px 5px 10px 5px;
            width: 60px;
            height: 30px;
            color: white;
            background-color: #EDB7C4;
            border-radius: 10px;
            text-decoration: none;
            cursor: pointer;
        }
        .a2 {
            text-decoration: none;
            color: white;
        }
        .a2:hover {
            color: purple;
        } 
    </style>
</head>
<body>
<form action="../telaInicialCliente.html" method="POST">
<input class="a"type="submit" name="submit" value="Voltar">
</form>

    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <a class="a2" href="formulario.php">Não possui conta? Cadastre-se aqui.</a>
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
    </div>
    
</body>
</html>