<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabela de Funiconários</title>
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
            background-image:URL(./img/velarosa.png);
        }
        .navbar{
            background-color: #E5DCDF;
        }
        .navbar-toggler-icon{
            background-color: #e0c8d0;
        }
        .navbar-nav {
          margin-left: -50%;
        }
        h3{
            color: pink;
            font-size: 50px;
            margin-left: 9%
        }

        th{
            color: black;
        }

        td{
            color:pink;
        }

        .btn-light {
          background-color: pink;
          border: none;
        }
        .btn-light:hover {
          background-color: #E5DCDF;
        } 
        </style>

<nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand"><img src="../img/logo.png" alt="icone" width="20%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 55%;">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../telainicialFuncionario.php">Home</a>
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
<br> <br>        
<h3>Funcionários cadastrados</h3>
<div class="container" style="margin-top:40px">
  
  <table class="table table-bordered">
  <thead class="border">
  <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  
  <tr>
    <?php 
    include "conex.php";
    $sql = "SELECT * FROM `funcionarios`";
    $busca = mysqli_query($conexao, $sql);

    while($array = mysqli_fetch_array($busca)) {

        $idFuncionario = $array['idFuncionario'];
        $nome = $array['nome'];
        $email = $array['email'];
        $telefone = $array['telefone'];

        ?>

        <td><?php echo $nome?></td>

        <td><?php echo $email?></td>

        <td><?php echo $telefone?></td>

        <td><a class="btn btn-light" href="editarFunci.php?id=<?php echo $idFuncionario?>" role="button">Editar</a>
        <a class="btn btn-danger" href="excluirFunci.php?id=<?php echo $idFuncionario?>" role="button">Excluir</a></td>

    </tr>

        <?php } ?>

   
    </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body>

</html>