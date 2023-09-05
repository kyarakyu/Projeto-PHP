<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar nova Senha</title>
</head>
<body>

<style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(../img/velarosa.png);
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color:#EDB7C4;
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }
        fieldset{
            border: 3px solid #a77fa3;
        }
        legend{
            border: 1px solid #a77fa3;
            padding: 10px;
            text-align: center;
            background-color: #a77fa3;
            border-radius: 8px;
            color: white;
        }
        .inputo{
            background-color: rgba(0, 0, 0, 0);
            color: white;
            position: relative;
            height: 30px;
            width: 400px;
            border: none;
            border-bottom: 1px solid white;
            margin-top: 4px;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px; 
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transform: .5px;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px; 
        }
        #submit{
            background-color: #a77fa3;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;

        }
        #submit:hover{
            background-color: #BA55D3;
        }

        .a {
            padding: 7px 5px 10px 5px;
            width: 60px;
            height: 30px;
            color: white;
            background-color: #BA55D3;
            border-radius: 10px;
            border: none;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

<form action="../telaInicialFuncionario.php" method="POST">
<input class="a"type="submit" name="submit" value="Voltar">
</form>
     
<div class="box">
<form action = "atualizarsenha.php" method="post">
        <fieldset>
            <legend><b>Cadastrar nova senha</b></legend>
            <br>
            <div class="inputBox">
            <label>Senha</label><br>
                 <input class="inputo" type="password" class="form-control" name="senha" placeholder="Insira a senha">
            </div>            
            <br><br>
            <input type="submit" name="submit" id="submit" value="Cadastrar">
        </fieldset>
    </form>
</div>

</body>
</html>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>