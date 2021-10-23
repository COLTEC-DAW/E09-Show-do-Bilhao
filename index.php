<?php
    session_start();


  include "Assets\Dados.php";
  include "Assets\Rodape.php";
  include "Assets\Login.php";

    
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body style="background-image: url(./images/background_jogo.png);">
    
<nav class="navbar navbar-expand-lg navbar-light ">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                    <li class="nav-item" id="title">
                       <h1 class="header-title"> Show do Bilhão</h1>
                    </li>
                    <li id="InfoUserLink" style="display: none;" class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#testimonial">informações de usuarios</a></li>
                    <li id="LoginBtn" class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="./LoginPage.php">Login</a></li>
                    <li id="SignUpBtn" class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="./Registrar.php">Sign Up</a></li>
                </ul>
        </nav>

    <div id="container" class="container-xl" ">
        
        <div id="home" class="col-xl-11 card">

            <div id="home-menu" class="col-xl-11 card-body">
                <div id="info" class="col-xl-12">
                    <p>O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de Televisão).
                        Neste programa, um candidato escolhido da audiência é submetido a uma sequência de 5 perguntas de conhecimento geral.
                        A medida em que o candidato responde cada pergunta ele avança no jogo.
                    </p>
                    <p>O jogo termina quando o candidato responde uma pergunta incorretamente.
                        Após o término do jogo o sistema calcula a pontuação final do candidato.
                        Sua pontuação é dada pela quantidade de perguntas respondidas corretamente pelo candidato.
                    </p>
                </div>
            </div> 

            

        </div>

        

        
    </div>
    <?php echo  GetRodape();?>

  

   <!-- Jquery -->
   <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>