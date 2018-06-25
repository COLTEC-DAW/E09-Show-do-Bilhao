<?php
    $quest = array(     "Quem era o homem mais sedutor do mundo?",      
                        "Qual é inseto que transmite doença de Chagas?",
                        "Quem é a namorada do Mickey?",
                        "Quem proclamou a república no Brasil em 1889?",
                        "Quem é o patrono do exército brasileiro?",
                        "No desenho “Papa-léguas” qual é o som feito pela ave corredora?",
                        "Qual ser mitológico possui o corpo metade mulher e metade peixe?",
                        "Em qual país surgiu a máfia?",
                        "Quem inventou o telefone?",
                        "Qual personagem lidera o bando da floresta de Sherwood?",
                    
                    );
    
    $options = array(  array(" Dom Juan"," Dom Antônio"," Dom Marco"," Dom Casmurro"),
                       array(" Barata"," Pulga"," Barbeiro"," Abelha"),
                       array(" Margarina"," Minnie"," Pequena Seria"," Olívia Palito"),
                       array(" Duque De Caxias"," Marechal Rondon"," Dom Pedro II"," Marechal Deodoro"),
                       array(" Marechal Deodoro"," Barão De Mauá"," Duque De Caxias"," Marquês De Pombal"),
                       array(" PING! PING!"," UGA! UGA!"," BIP! BIP!"," VRUM! VRUM!"),
                       array(" Sereia"," Medusa"," Cleópatra"," Serena"),
                       array(" Estados Unidos"," Inglaterra"," Ítalia"," Espanha"),
                       array(" GRAHAM BELL"," GEORGE WASHINGTON"," THOMAS EDISON"," MARCONI"),
                       array(" ROBIN COOK"," ROBIN BANKS"," ROBIN HOOD"," ROBIN DAYS"),

                    );
    
//respostas(0,2,1,2,0,2,0,2,0,2)  
// A,C,B,C,A,C,A,C,A,C
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Show do Milhão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>

<body>
   
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Jogo do milhão</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
         </ul>    
    </div>
</nav>
   
   <center >
   <img src="show.png" alt="show" height="" width="">

    </center>
   <div class="container">
    <div class="mt-4 ml-4 mr-4 perguntas">
        <?php
            for($i = 0;$i < 10;$i++){
                $perg = $i + 1;
                $repo = $options[$i]; ///

                echo " <div class= jumbotron >";
                echo "   <h2>$quest[$i]</h2>   "; //

            ///////////////////////////////////////////////////////////////////////////////////////////////////////
                echo  " <div class= ml-4 >";
                echo "   <input type=\"radio\" name=\"p $perg\" id=\"p$perg" . "a\">$repo[0] <br>  ";
                echo "</div>";   
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
                echo " <div class=ml-4 >";
                echo "   <input type=\"radio\" name=\"p $perg\" id=\"p$perg" . "b\">$repo[1] <br>  ";
                echo "</div>";   
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
                echo " <div class= ml-4>";
                echo "   <input type=\"radio\" name=\"p $perg\" id=\"p$perg" . "c\">$repo[2] <br>  ";
                echo "</div>";   
             ///////////////////////////////////////////////////////////////////////////////////////////////////////
                echo " <div class= ml-4>";
                echo "  <input type=\"radio\" name=\"p $perg\" id=\"p$perg" . "d\">$repo[3] <br>  ";
                echo "</div>";   
             ///////////////////////////////////////////////////////////////////////////////////////////////////////

                  echo "</div>";   
            }
         ?>

        <button type="button" class="btn btn-success btn-lg">Enviar</button>
        <button class="btn btn-warning btn-lg"><a  href="gabarito.html">Respostas</a></button>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>