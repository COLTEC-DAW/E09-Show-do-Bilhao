<?php
    /**
     * Variáveis:
     */
    $id = $_GET['id']; //id da pergunta
    
    $enunciados = array(
        0 => "Biologia:\nExiste pessoas com determinado tipo sanguíneo que são consideradas doadores universais.<br>
        Que tipo sanguíneo essa pessoa possui?<br>",
        1 => "English:\nChoose the alternative that indicates the plural of the words: fish, life, woman.<br>",
        2 => "História:\nA formação dos Estados Modernos fez desaparecer os laços de suserania e vassalagem e, <br>
        com isso, foram formado(as), na Europa:<br>"
    );
    $alternativas = array(
        0 => array(
            0 => '(a) O+ <br>',
            1 => '(b) O- <br>', 
            2 => '(c) AB+ <br>', 
            3 => '(d) AB- <br>' 
        ),
        1 => array(
            0 => '(a) Fishes, lifes, woman. <br>',
            1 => '(b) Fishs, lives, woman. <br>',
            2 => '(c) Fish, lives, women. <br>',
            3 => '(d) Fish, lifes, women. <br>'    
        ),
        2 => array(
            0 => '(a) os exércitos nacionais. <br>',
            1 => '(b) os burgos. <br>',
            2 => '(c) as Cruzadas. <br>',
            3 => '(d) os cavaleiros da luz. <br>'  
        )
    );
    $respostasCertas = array(
        0 => 1,
        1 => 2,
        2 => 0
    );
    /**
     * Procedimentos 
     */
    if($id != null){ imprimeEnun($id, $enunciados, $alternativas);  }
    /**
     * Função que imprime cada pergunta separadamente; Ou seja, função escolhida anteriormente.
     * @param id // = chave da pergunta
     */
    function imprimeEnun($id, $enunciados, $alternativas){
        foreach($enunciados as $key => $value){
            if($key == $id){
                echo("$value");
                for($i = 0; $i <= 3; $i++){
                    echo($alternativas[$key][$i]);
                }
            }
        }
    }
    function imprimeGab(){
        echo("<p>Gabarito: </p>");
        $j = 0;
        foreach($respostasCertas as $key => $respostaDoSer){
            echo("$j :");
            echo($alternativas[$key][$respostaDoSer]);
            $j++;
        }    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta encoding="utf-8">
    <meta name="desenvolvedor" content="Laiza Ferreira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Do Bilhão</title>
    <link rel="stylesheet" href="./detalhes.sass" />
    <link rel="stylesheet" href="./arquivo.sass" />
</head>
<body>
    <div class="container">
        <section>
            <form class="form" action="functions.php" method="post">
                (a) <input type="checkbox" name="escolha" value="a">  
                (b) <input type="checkbox" name="escolha" value="b"> 
                (c) <input type="checkbox" name="escolha" value="c">  
                (d) <input type="checkbox" name="escolha" value="d"> <br>
                <input type="hidden" name="pergunta" value=<?=$id?> />
                <input type="submit" name="Enviar"><br>
            </form>
        </section>
    </div>
    <footer class="col_12" id="footer">
        <p> Desenvolvimento de Aplicações Web - COLTEC/UFMG </p>
        <p> Laiza Ferreira Lage </p>
    </footer>
</body>
</html>
