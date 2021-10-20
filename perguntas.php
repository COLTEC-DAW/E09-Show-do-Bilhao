 <?php 
    // array com os enunciados
    $enunciados = array(
        "<p>Em qual língua o Death Note está escrito?</p>",
        "<p>Qual o nome verdadeiro de Kira?</p>",
        "<p>Onde Light Yagami estava quando viu o Death Note?</p>",
        "<p>Quem L escolheu como seu Sucessor?</p>",
        "<p>Qual o nome do Shinigami que entregou o caderno a Misa Amane?</p>",
    );
    
    // matriz com as alternativas
    $alternativas = array(
        array("Inglês","Português","Japonês","Espanhol"),
        array("Mikami","Light Yagami","Matsuda","Soichiro Yagami"),
        array("Em sua Casa","Numa Loja de Conveniência","Na Escola","Numa Cafeteria"),
        array("Gelus","Rem","Ryuk","Sidoh"),
        
    );

    $respostas = array(0,1,2,1);
    
    $keys = array_keys($alternativas);

    function letraResposta($indice){
        $letra = array("A","B","C","D");
        return $letra[$indice];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIME QUIZ</title>
</head>
<body>
    <h1>Perguntas</h1>
    <ul>
        <?php foreach ($enunciados as $enunciado) {
            echo "<li>$enunciado</li>";
        }?>
    </ul>
    <h1>Alternativas</h1>
    <?php 
        for ($i=0; $i < count($alternativas); $i++) { 
            echo "<ul>";
            foreach ($alternativas[$keys[$i]] as $key => $value) {
                echo "<li>$value</li>";
            }
            echo "</ul>";
        } 
    ?>
    <h1>Índice das Respostas</h1>
    <ul>
        <?php foreach ($respostas as $resposta) {
                echo "<li>$resposta</li>";
        }?>
    </ul>
    <h1>Texto correspondente à Resposta</h1>
    <ul>
        <?php
            for($i = 0; $i < count($respostas); $i++){
                $textoResposta = $alternativas[$i][$respostas[$i]];
                echo "<li>$textoResposta</li>";
            } 
        ?>
    </ul>
</body>
</html>