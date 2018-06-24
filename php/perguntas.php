<?php
    $perguntas[0] = 'Quem dirigiu "O Exorcista"?';
    $perguntas[1] = 'Qual foi o único filme em preto e branco dirigido por Steven Spielberg?';
    $perguntas[2] = 'De que gênero "Calafrios" de David Cronenberg é "listado"?';
    $perguntas[3] = 'Qual desses filmes Tim Burton não dirigiu?';
    $perguntas[4] = 'Qual foi o primeiro filme de Woody Allen feito fora dos Estados Unidos?';


    $alternativas = array(
        0 => array('Roman Polanski','Francis Ford Copolla','Steven Spielberg','William Friedkin','Andrew Davies'),
        1 => array('A cor púrpura','A lista de Schindler','Tubarão','ET','Encurralado'),
        2 => array('Romance','Ação','Aventura','Horror','Drama'),
        3 => array('Vincent','Os fantasmas se divertem','A fantástica fábrica de chocolate','Alice no país das maravilhas','Edward Mãos de Tesoura'),
        4 => array('Vicky Cristina Barcelona','Meia-noite em Paris','Match Point','Para Roma com amor','Scoop'),
    );

    $respostas = array(3, 1, 3, 0, 2);


    function carregaPergunta($id){
        global $perguntas;
        global $alternativas;
        return [$perguntas[$id], $alternativas[$id], $respostas];
    }



 ?>
