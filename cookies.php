<div>
    <h3>
        <?php
            session_start();
            if(!isset($_COOKIE["nome"]) || !isset($_COOKIE["pontos"])){
                setcookie("nome", $_SESSION['login'], time()+3600);
                setcookie("pontos", $_SESSION['pontos'], time()+3600);
                
            }else{
                echo "Ultimo Jogador: " . $_COOKIE["nome"] . " Pontos Ultimo Jogador: " . $_COOKIE["pontos"];
            }
        ?>
    </h3>
</div>