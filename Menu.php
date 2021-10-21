
<?php
session_start();
  $user;
if(isset($_SESSION['User'])){
  $user = $_SESSION['User'];
}else{
  session_destroy();
  header('Location: MenuLoginInicio.php');
}

?>

<html>
 <head>
  <title>Teste PHP</title>
  <meta charset="UTF-8">
  <style type = "text/css">
    form#go{
      text-align: center;
    }
    input#botao{
      padding-inline: 60px;
      margin-right: 42%;
    }
    body{
      background-color: black;
    }
    h1{
      color: red;
      font-size: 50px;
      text-align: center;
    }
    h3#regras{
      color: blue;
    }
    div#Texto{
      text-align: center;
    }
    input{
        margin-left: 43%;
        margin-right: 40%;
        margin-top: 100px;
        padding-left: 1%;
        padding-right: 1%;
    }
  </style>
 </head>
 <body>
    <h1> Jogo do Bilhão </h1>
     <div id = "Texto">
        <p>Olá 
        <?php 
          echo $user;
        ?>
        , Vamos começar a Jogar?</p>
        <p>No Jogo Você têm a possibilidade para ganhar até 1 Bilhão de Reais!!!!</p>
        <h3 id ="regras">Regras</h3>
        <p>As Regras São simples, serão feitas várias perguntas, você deve responder todas. A cada pergunta acertada
         você ganha um pouco do dinheiro total, caso você acerte todas você ganha 1 Bilhão.
        </p>
     </div>

     <form action="Perguntas.php" id = "go" method="POST" >
      <input type = "hidden" name = "id" value= 1>
      <input type = "hidden" name = "pontuacao" value= 0> 
      <input type ="submit" id="botao" name = "botao" value="GO">
    </form> 
<script>
  var texto = window.document.getElementById("Texto");
  texto.style.color = 'red';
</script>
 </body>
</html>