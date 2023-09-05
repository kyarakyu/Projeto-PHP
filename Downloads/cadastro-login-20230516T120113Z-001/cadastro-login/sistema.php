<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href=".../css/owl.theme.default.min.css">
    <link rel="icon" href="../img/CC_20230209_103124.png">

</head>
<head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="icone" width="10%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="./php - produtos/produtoFuncionario.php">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobrenosFuncionario.html">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contatosFuncionario.html">Contatos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./php - produtos/cadastrarproduto.php">Cadastrar produtos</a>
            </li>
          </ul>
          <nav class="navbar navbar-light">
          </nav>
        </div>
      </nav>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" >
            <img class="d-block w-100" src="./img/cozy-autumnal-composition-with-burning-candles-pumpkins-blurred-background.jpg" alt="Primeiro Slide" id="img2">
            <div class="carousel-caption d-none d-md-block">
              <div class="texto">
              <h1>Lumiére</h1>
              <p id="p1">Poesia que acende</p>
            </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/flat-lay-spa-decoration-with-towels-candles.jpg" alt="Segundo Slide" id="img2">
            <div class="carousel-caption d-none d-md-block">
              <h1>Lumiére</h1>
              <p id="p1">Poesia que acende</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/vs-brancoamarelo.jpg" alt="Terceiro Slide" id="img2">
            <div class="carousel-caption d-none d-md-block">
              <h1>Lumiére</h1>
              <p id="p1">Poesia que acende</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </head><br><br>

 <div class="linha">
  <div class="coluna">
  </div>
 
    <div class="coluna">
     <div class="flip-img">
        <div class="flip-img-inner">
          <div class="flip-img-front">
          <img  src="./img/IMG-20230207-WA0008.jpg" width="100%" height="100%"/>
          </div>
          <div class="flip-img-back">
            <img src="./img/IMG-20230207-WA0009.jpg"/>
        </div>
        </div>
      </div>
    </div>
    
    <div class="coluna"> <br>Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br>
      Doloremque veniam dolores perferendis tempora voluptatibus omnis deserunt provident deleniti! 
      Voluptatum quisquam autem eaque aliquid! Mollitia delectus iusto enim animi quam ipsam.</div>
 </div>


 <div class="linha" >
  <div class="coluna">
  </div>
  <div class="coluna">
  </div>
  <div class="coluna">
  </div>
  <div class="coluna">
  </div>
  <div class="coluna">
  </div>
  <div class="coluna">
  </div>
  <div class="coluna">
  </div>
  <div class="coluna">
  </div>
    <div class="coluna"> <br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
      Doloremque veniam dolores perferendis tempora voluptatibus omnis deserunt provident deleniti! 
      Voluptatum quisquam autem eaque aliquid! Mollitia delectus iusto enim animi quam ipsam.</div>
      <div class="flip-img">
        <div class="flip-img-inner">
          <div class="flip-img-front">
          <img  src="./img/IMG-20230207-WA0011.jpg"/>
          </div>
          <div class="flip-img-back">
            <img src="./img/IMG-20230207-WA0010.jpg"/>
        </div>
        </div>
      </div>
    </div>
 </div>
 
<br><br>


<div class="whats">
  <a href="https://wa.me/5521979249199" target="_blank">
  <img src="./img/whats1.png" width="60" alt="Fale Conosco pelo Whatsapp" title="Fale Conosco pelo Whatsapp" />
</a>
</div>


<footer>
    <div class="boxs">
        <h2>Início</h2>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Produtos</a></li>
        </ul>
    </div>
    <div class="boxs">
        <h2>Informações</h2>
        <ul>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Email</a></li>
        </ul>
    </div>
    <div class="boxs">
        <h2>Suporte</h2>
        <ul>
            <li><a href="#">Telefone</a></li>
            <li><a href="#">Chat</a></li>
        </ul>
    </div>
     <div class="boxs">
        <h2>Sobre nós</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corrupti, magnam ipsam quis natus cumque ad nulla laudantium ex reiciendis
            consequatur quasi blanditiis dolorum culpa repudiandae consectetur asperiores officia nobis excepturi?
        </p>
</footer>

<div class="footer">
    <h2><img src="./img/CC_20230209_103124.png" width="7%" alt="logo"></h2>
    <div class="sociais">
    <div class="social">
        <a href="https://instagram.com/marcosviniciusrinalde?igshid=Yzg5MTU1MDY="><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>
    <div class="social">
        <a href="https://wa.me/5521969763424"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    </div>
    <div class="social">
        <a href="https://twitter.com/Sonic3isthebest?t=jdDQxwvvRaWRNO3-anLKDA&s=09"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>
    </div>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/setup.js"></script>

</body>


</html>