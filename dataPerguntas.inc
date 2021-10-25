<?php 
$enunciados = array(
        "<p>Em qual língua o Death Note está escrito?</p>",
        "<p>Qual o nome verdadeiro de Kira?</p>",
        "<p>Onde Light Yagami estava quando viu o Death Note pela primeira vez?</p>",
        "<p>Quem L escolheu como seu Sucessor?</p>",
        "<p>Qual o nome do Shinigami que entregou o caderno a Misa Amane?</p>",
    );
    
    // matriz com as alternativas
    $alternativas = array(
        array("Inglês","Português","Japonês","Espanhol"),
        array("Mikami","Light Yagami","Matsuda","Soichiro Yagami"),
        array("Em sua Casa","Numa Loja de Conveniência","Na Escola","Numa Cafeteria"),
        array("Near","Mello","Watari","Ele Não Se Decidiu"),
        array("Gelus","Rem","Ryuk","Sidoh"),
        
    );

    $respostas = array(0,1,2,3,1);
    $keys = array_keys($alternativas);
?>