<?php
    ob_start();  

?>

<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css"  href="style.css" />
        <title>Clarisse Scofield</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
        <style type="text/css">#title,#glyphs h1{font-family:"Open Sans Condensed Light"}</style>    
        
    </head>
    <body>


        <?php
            include "menu.inc";
            session_start();
           
            if(!isset($_SESSION["nome"]) && !isset($_SESSION["senha"])){ //testa se ja tem nome e senha
                echo '<a href="/jogador.html"><button type="button" class="btn btn-success">Começar</button></a>'; //login
            } else{
                echo '<a href="/perguntas.php?id=0"><button type="button" class="btn btn-success">Começar</button></a>';
            }

            echo '<a href="logout.php"><button type="button" class="btn btn-danger">Sair</button></a>';
            include "rodape.inc";
  
        ?>
        
    </body>
</html>