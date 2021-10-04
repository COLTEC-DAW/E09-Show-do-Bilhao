<?php 
    // Inclusão dos dados das pergunstas.
    include "Lib\\Data.inc";
    // Inclusão do menu superior.
    include "Lib\\Menu.inc"; 
    // Inclusão do footer.
    include "Lib\\rodape.inc";

    SortIndexs();

    function Destino(){
        return "perguntas.php?id=" . explode('/', $GLOBALS["indices"])[0];
        
    }

    function SortIndexs(){
        $GLOBALS["indices"] = "";

        $count = 0;
        
        while($count != 5){
            $random = random_int(0, (Count($GLOBALS["Quests"])-1));
            $validate = true;
            for($i=0;$i<$count;$i++){
                if($GLOBALS["indices"][$i] == $random){
                    $validate = false;
                    break;
                }
            }

            if($validate){
                $GLOBALS["indices"] = $GLOBALS["indices"] . $random . "/";
                $count++;
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

    <!-- Estilo do jogo -->
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Parte superior -->
    <?php echo GetMenu() ?>

    <div id="Cabecalho">
        <h1 id="title"> Show do Bilhão! </h1>
        <p>O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de Televisão). Neste programa, um candidato escolhido da audiência é submetido a uma sequência de 5 perguntas de conhecimento geral. A medida em que o candidato responde cada pergunta ele avança no jogo.</p>
        <p>O jogo termina quando o candidato responde uma pergunta incorretamente. Após o término do jogo o sistema calcula a pontuação final do candidato. Sua pontuação é dada pela quantidade de perguntas respondidas corretamente pelo candidato.</p>
    </div>

    <form action=<?php echo Destino()?> method="post">
        <input type="hidden" id="Pontos" name="Pontos" value='0'>
        <input type="hidden" id="LastIndex" name="LastIndex" value='-1'>
        <input type="hidden" id="FinalP" name="FinalP" value='5'>
        <input type="hidden" id="JaSorteados" name="JaSorteados" value=<?php echo $GLOBALS["indices"]?>> 
        <input type="hidden" id="Alternativa" name="Alternativa" value='-1'>

        <input type="submit" value="Enviar">
    </form>

    <!-- Parte inferior -->
    <?php echo GetFooter() ?>
</body>
</html>