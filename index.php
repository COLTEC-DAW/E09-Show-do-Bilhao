<?php
    include "Info\data.inc";
    include "Info\menu.inc";
    include "Info\Rodape.inc";

    SorteiaIndex();

    function Destino(){
        return "perguntas.php?id=" . explode('/', $GLOBALS["indices"])[0];
    }

    function SorteiaIndex(){
        $GLOBALS["indices"] = "";
        $contador = 0;

        while($contador != 5){
            $random = random_int(0, (Count($GLOBALS["Perguntas"])-1));
            $valida = true;
            for($i = 0; $i < $contador; $i++){
                if($GLOBALS["indices"][$i] == $random){
                    $valida = false;
                    break;
                }
            }
            if($valida){
                $GLOBALS["indices"] = $GLOBALS["indices"] . $random . "/";
                $contador++;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title> 
    <link rel="stylesheet" href="./style.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
</head>

<body>
    <?php echo Menu()?>
    <div>
        <h1>Show do Bilhão </h1>
        <h2>Edição Marvel</h2>
        <p>O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de Televisão). Neste programa, um candidato escolhido da audiência é submetido a uma sequência de 5 perguntas de conhecimento geral. A medida em que o candidato responde cada pergunta ele avança no jogo.</p>
        
    </div>

    <form action=<?php echo Destino() ?> method="post">
        <input type="hidden" id="Pontos" name="Pontos" value='0'>
        <input type="hidden" id="UltimoIndex" name="UltimoIndex" value='-1'>
        <input type="hidden" id="Final" name="Final" value='5'>
        <input type="hidden" id="Sorteados" name="Sorteados" value=<?php echo $GLOBALS["indices"]?>> 
        <input type="hidden" id="Opcao" name="Opcao" value='-1'>

        <input type="submit" value="Começar" id="Botao">
    </form>

    <?php echo Rodape()?>
</body>

</html> 