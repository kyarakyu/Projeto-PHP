<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="icon" href="../img/lumiereicon.png">
</head>
<body>
  <style>
    body{
    background-image:url(../img/florcanto2.png);
    background-repeat: no-repeat;
    background-position: bottom 350px right 100px;
    font-size: large;
    font-family: serif;
}

.navbar{
    background-color: #E5DCDF;
}
.navbar-toggler-icon{
    background-color: #e0c8d0;
}

.table{
    width: 500px;
    height: 150px;
    margin-left: 35%;
    font-family: serif;
    font-size: larger;
}

.button {
    color: #fff;
    background-color: palevioletred;
    width: 400px;
    height: 100px;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
    font-size: medium;
}

.whats{
  position: fixed;
  bottom: 10px;
  right: 25px;
  z-index: 9999;
}

h1{
color: #E5DCDF;
font-size: 100px;
font-family:serif;
text-shadow: #e0c8d0 1px 5px 5px;
-webkit-text-stroke-width: 1px;
-webkit-text-stroke-color: #e0c8d0;
}

#square {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 5px;
    padding: 5px;
    max-width: 200px;
    
    background-color:#a77fa3 ;
    border-radius: 5px;
    box-shadow: 2px 2px 9px 2px #000f;
}
#square:hover{
    background-color: #EDB7C4;
}


@media screen and (max-width:500px){
 .carrousel-inner{
    width: 30%;
 }
 .navbar-brand{
    width: 30%;
 }
 .container{
    width: 50%;
 }
}
    
@media(max-width:500px){
    body{
        width: 50%;
    }
    img{
        width: 30%;
    }
    
   }

* {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}

footer{
    width: 100%;
    min-height: 250px;
    background: #a77fa3;
    display: flex;
    height: 200%;
}

footer .boxs {
    width: 320px;
    min-height: 150px;
    padding: 20px;
    margin-left: 5%;
}

footer .boxs:nth-child(4)
{
    width: 500px;
}

.boxs h2 {
    color: white;
    margin-bottom: 20px;
}

.boxs ul li {
    margin:10px 0px;
    list-style: none;
}

.boxs ul li a {
    color: #ddd;
    text-decoration: none;
}

.boxs ul li a:hover {
    color: #fff;
}

.boxs p {
    color: #fff;
    text-align: justify;
}

.footer {
    width: 100%;
    height: 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: grey;
    padding: 0px 20px;
}

.footer h2 {
    color: #fff
}

.footer .sociais {
    display: flex;
}

@media(max-width: 950px) {
    footer {
    flex-direction: column;
}
    footer .boxs {
        width: 100%;
        text-align: center;
}

    footer .boxs:nth-child(4) {
        width: 100%;
}
}


hr {
    margin-left: 10px;
    margin-right: 60px;
    border-right: none;
    border-top: none;
    border-bottom: none;
}

.btn-light {
    background-color: #a77fa3;
    color: white;
    border-radius: 10px;
}

</style>

<nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="icone" width="10%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 53%;">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../telaInicialCliente.html">Home</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="../sobrenosCliente.html">Sobre nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../contatosCliente.html">Contatos</a>
                </li>
              </ul>
              <nav class="navbar navbar-light">
              </nav>
            </div>
          </nav>
            <hr>
    </nav>

    <h1 style="font-size: 70px; margin-left: 9%">Nossos Produtos</h1>
    <p style="font-size: 25px; margin-left: 9%; color:#a77fa3">Aroma e aconchego<p>
        <p style="font-size: 25px; margin-left: 9%; color:#a77fa3">Cuide de quem mais merece: você.<p>
    <br><br>
  
  
    <div class="container" style="height: 100px">
    <div class="owl-carousel owl-theme">
        <div class="item" id="square"><img src="../img/vela1.png" alt=""></div>
        <div class="item" id="square"><img src="../img/vela2.png" alt=""></div>
        <div class="item" id="square"><img src="../img/vela3.png" alt=""></div>
        <div class="item" id="square"><img src="../img/vela4.png" alt=""></div>
        <div class="item" id="square"><img src="../img/vela5.png" alt=""></div>
        <div class="item" id="square"><img src="../img/vela6.png" alt=""></div>
        <div class="item" id="square"><img src="../img/vela7.png" alt=""></div>
    </div>
</div>
</div>
<p><p><p><p>
<br><br>
<br><br>
<br>
  <table class="table">
  <tr>
    <?php 
    include "conexao.php";
    $sql = "SELECT * FROM `produtos`";
    $busca = mysqli_query($conexao, $sql);

    while($array = mysqli_fetch_array($busca)) {

        $idProduto = $array['idProduto'];
        $nomeProduto = $array['nomeProduto'];
        $preco = $array['preco'];

        ?>

        <td><?php echo $nomeProduto?></td>

        <td><?php echo $preco?></td>

        <td><a  class="btn btn-light" href="https://wa.me/5521969763424?id=<?php echo $idProduto?>">Comprar</a></td>

    </tr>

        <?php } ?>

   
    </table>

<script src="../js/produto.js"></script>

<div class="whats">
  <a href="https://wa.me/5521979249199" target="_blank">
  <img src="../img/whats1.png" width="60px" alt="Fale Conosco pelo Whatsapp" title="Fale Conosco pelo Whatsapp" />
</a>
</div>


<footer>
    <div class="boxs">
        <h2>Início</h2>
        <ul>
            <li><a href="../telaInicialCliente.html">Home</a></li>
            <li><a href="./php - produtos/produtoCliente.php">Produtos</a></li>
        </ul>
    </div>
    <div class="boxs">
        <h2>Informações</h2>
        <ul>
            <li><a href="https://instagram.com/lumierearoma?igshid=ZDdkNTZiNTM=">Instagram</a></li>
            <li><a href="https://wa.me/5521969763424">Whatsapp</a></li>
        </ul>
    </div>
    <div class="boxs">
    <h2>Aréa Administrativa</h2>
        <ul>
            <li><a href="../login do login/logindologin.php">Login</a></li>
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
    <h2><img src="../img/CC_20230209_103124.png" width="7%" alt="logo"></h2>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/setup.js"></script>

</body>
</html>