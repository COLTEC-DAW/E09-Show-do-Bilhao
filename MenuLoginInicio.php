<?php
 if(isset($_COOKIE['User'])){
  header("Location: MenuLogin.php");
}

?>

<html>
    <head>
     <title>Teste PHP</title>
     <meta charset="UTF-8">
     <style type = "text/css">
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
       input#botao{
           margin-left: 48%;
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
           <p>Olá, Vamos começar a Jogar?</p>
           <p>No Jogo Você têm a possibilidade para ganhar até 1 Bilhão de Reais!!!!</p>
           <h3 id ="regras">Regras</h3>
           <p>As Regras São simples, serão feitas várias perguntas, você deve responder todas. A cada pergunta acertada
            você ganha um pouco do dinheiro total, caso você acerte todas você ganha 1 Bilhão.
           </p>
           <h2>Faça o Cadastro Agora para começar.</h2>
        </div>
   
        <form action="MenuLogin.php" method="POST" >
         <input type = "text" name="User">
         <input type ="submit" id="botao" name = "botao" value="GO">
       </form> 
   <script>
     var texto = window.document.getElementById("Texto");
     texto.style.color = 'red';
   </script>
    </body>
   </html>