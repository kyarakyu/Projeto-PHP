<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabela</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../js/bootstrap.min.js">
        <link rel="stylesheet" href="../css/produtos.css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="icon" href="../img/lumiereicon.png">
</head>

<body>


    <style>
      
      * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            box-sizing: border-box;
        }

        body{
            background-color: white;
            background-image: url(../img/fundo.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: left center;
            font-size: large;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }

        h3{
            color: white;
        }

        th{
            color: #000;
        }

        td{
            color:#000;
        }

        .navbar{
                background-color: #EDB8C8;
            }
            .navbar-toggler-icon{
                background-color: hotpink;
            }

            .navbar-brand {
                margin-top: -3%;
                cursor:auto;
            }

            .nav-item {
                display: inline-block;
                padding: 10px;
                margin-left: 10px;
                margin-top: -2%;

            }

        </style>

<div class="container" style="margin-top:40px">
  <h3>Tabela</h3>
  
  <table class="table table-bordered">
  <thead>
  <tr>
      <th scope="col">Nome do produto</th>
      <th scope="col">Quantidade no estoque</th>
      <th scope="col">Valor do produto</th>
      <th scope="col">Descrição do produto</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  
  <tr>
    <?php 
    include "conexlogin.php";
    $sql = "SELECT * FROM `senha`";
    $busca = mysqli_query($conexao, $sql);

    while($array = mysqli_fetch_array($busca)) {

        $senha = $array['senha'];

        ?>

        <td><?php echo $senha?></td>

    </tr>

        <?php } ?>

   
    </table>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</body>
</html>