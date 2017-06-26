<?php ob_start();?>
<meta charset="utf-8">
<?php
    if(isset($_COOKIE["pergunta"])){
        if($_COOKIE["pergunta"] == 5){
            echo "<h1>VOCÊ VENCEU O SHOW DO BILHÃO!!</h1>";
            echo "<h3>Temos um novo bilionário entre nós!</h3>";
        }
        else{
            echo "<h1>Você ainda não chegou no final. Pare de trapaçear!</h1>";
            echo "<a href=\"perguntas.php\"><button>Voltar às perguntas</button></a>";
        }
    }
    else{
        echo "<h1>Jogador não identificado! Vitória cancelada...</h1>";
        echo "<a href=\"login.php\"><button>Página Inicial</button></a>";
    }
?>