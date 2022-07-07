<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
    $menu = "partials/menu.inc";
    $rodape = "partials/rodape.inc";
    $caminho_arquivo_partials_perguntas = "partials/perguntas.inc";
    
    if (is_readable($menu)) include $menu;
    if (is_readable($caminho_arquivo_partials_perguntas)) include $caminho_arquivo_partials_perguntas; 
    else {
        echo "Página fora do ar";
        exit(1);
    }
    
    $enunciados = [
        "Segundo a gramática, 'y' é uma/um:",
        "Bandex?",
        "Segundo o ICP, qual é o maior mal da atualidade?",
        "Ao ouvir o tema de grafos, quem é a pessoa mais provável de estar falando sobre:",
        "Qual das alternativas a seguir 'dá shape': "
    ];
    $alternativas = [
        ["Vogal","Depende","Semivogal","Consoante"],
        ["No almoço", "No almoço e jantar", "Eu prefiro comer na Engenharia", "No café da manhã, almoço e jantar"],
        ["Eliezer/Esquerda", "Astrologia", "Bebida", "Neoliberalismo"],
        ["Ullas", "Moras", "Amanda", "Éric"],
        ["Fruta", "Bandex", "Café", "Corote"]
    ];
    $respostas = [1,3,1,0,1];

    function verificaParametroIdPergunta($parametro){
        $parametro = intval($parametro);
        if(!is_int($parametro)) return false;
        if($parametro < 0 || $parametro > count($GLOBALS["enunciados"])) return false;
        return true;
    }

    if(!isset($_GET["id"])){
        echo "Essa pergunta não existe";
    } else if(verificaParametroIdPergunta($_GET["id"])){
        carregaPergunta(intval($_GET["id"]), $enunciados, $alternativas);
    } else echo "Parametro não válido"
    ?>
    <?php
    if (is_readable($rodape)) include $rodape;
    ?>
</body>
</html>