<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Clarisse Scofield</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
        <style type="text/css">#title,#glyphs h1{font-family:"Open Sans Condensed Light"}</style>    
        
    </head>
    <body>

        <div id="header">
            <h1>Show do bilhão</h1>
            <h2 > Uma chance, um jogo!</h2>
         </div>

        <?php
            global $enunciados;
            global $alternativas;
            global $certa;
            $enunciados = array("Qual o nome do Madeira?", "Qual a cor do lab do 3?");
            $alternativas[0][0] = "a-joao";
            $alternativas[0][1] = "b-gustavo";
            $alternativas[0][2] = "c-rodrigao";
            $alternativas[0][3] = "d-cuboalex";
            $alternativas[1][0] = "a-rosa";
            $alternativas[1][1] = "b-purple";
            $alternativas[1][2] = "c-amarelo";
            $alternativas[1][3] = "d-invisivel";

            //array(array("a-joao","b-gustavo","c-rodrigao","d-cuboalex"), array("a-rosa","b-purple","c-amarelo","d-invisivel"));
            $certa = array(3,2); //indice para a certa
            for($j=0;$j<2;$j++){
                echo "<p>Questao: $enunciados[$j] </p>";
                echo "<br>";
                for($i=0; $i<4;$i++){
                     echo "<p>  " . $alternativas[$j][$i] . " </p>";
                     echo "<br>";
                }
                
            }
       


            
            
        ?>
        
    </body>
</html>