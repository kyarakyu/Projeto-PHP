<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
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
            background-image: url(../img/roxo.png);
        }
        .box{
            color: #000;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color:#E5DCDF;
            padding: 15px;
            border-radius: 15px;
            width: 30%;
            height: 570px;
            margin-top: 2%;
        }
        fieldset{
            border: 3px solid #a77fa3;
            border-radius: 10px;
            height: 520px;
        }
        legend{
            width: 220px;
            height: 40px;
            font-size: 15px;
            border: 1px solid #a77fa3;
            padding: 10px;
            text-align: center;
            background-color: #a77fa3;
            border-radius: 8px;
            color: white;
        }
        .inputBox {
            padding: 3px;
            margin-bottom:-7%;
            margin-left: 1%;
        }
        .inputo{
            background-color: #E5DCDF;
            color: black;
            position: relative;
            height: 30px;
            width: 400px;
            border: none;
            border-bottom: 1px solid purple;
            margin-top: -5px;
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
            color: white;
            background-color: #4F4F4F;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: white;
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
            width: 200px;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            margin-left: 25%;

        }
        #submit:hover{
            background-color: #BA55D3;
        }
    </style>

<nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand"><img src="../img/logo.png" alt="icone" width="10%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 25%;">
        <ul class="navbar-nav">
        <li class="nav-item">
              <a class="nav-link" href="../telaInicialFuncionario.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tabela.php">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contatosFuncionario.html">Contatos</a>
            </li> 
            
            <li class="nav-item">
                  <a class="nav-link" href="../php - produtos/tabela.php">Produtos Cadastrados</a>
                </li>  
            <li class="nav-item">
                  <a class="nav-link" href="../cadastro-funcionarios/tabelaFuncionario.php">Funcionários Cadastrados</a>
                </li> 
                <li class="nav-item">
              <a class="nav-link" href="../sobrenosFuncionario.html">Sobre nós</a>
            </li>       
          </ul>
        
          <nav class="navbar navbar-light">
          </nav>
        </div>
        <div class="d-flex">
          <a href="../cadastro-login/sair.php" class="btn btn-danger">Sair</a>
        </div>
      </nav>
     
<div class="box">
<form action = "inserirproduto.php" method="post">
        <fieldset>
            <legend><b>Cadastro dos produtos</b></legend>
            <br>
            <div class="inputBox">
            <label>Nome do produto.</label><br>
                 <input class="inputo" type="text" class="form-control" name="nomeProduto" placeholder="Insira o nome do produto" required>
            </div>
            <br><br>
            <div class="inputBox">
            <label>Quantidade no estoque.</label><br>
                <input class="inputo" type="number" class="form-control" name="volume" placeholder="Insira a quantidade do produto no estoque">
            </div>
            <br><br>
            <div class="inputBox">
            <label>Valor do produto.</label><br>
                <input class="inputo" type="text" class="form-control" name="preco" placeholder="Insira o valor do produto" required>
            </div>
            <br><br>
            <div class="inputBox">
            <label>Descrição do produto.</label><br>
                <input class="inputo" type="text" class="form-control" name="tipoProduto" placeholder="Insira a descrição do produto">
                <br><br>
            <input type="submit" name="submit" id="submit" value="Cadastrar">
            </div>
            
            
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