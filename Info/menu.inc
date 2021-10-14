<?php 

function Menu(){
    $format = 
    '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Show do Bilhão</a>
        <div class="collapse navbar-collapse nav-pills" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="exibicaoCompleta.php">Perguntas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?Logout=true">Sair</a>
                </li>
            </ul>
        </div>
    </nav>';

    if(isset($_SESSION['usuario']) && !isset($_GET['Logout'])){
        $format = $format .
        "<div>
            Olá ". $_SESSION['usuario'] .  ",</br>" .
            "Ultimo acesso: " . $_COOKIE['ultimoJogo'] . "</br>" .
            "Pontuação anterior: " . $_COOKIE['ultimoJogoPontos'] .  "</br>" .
        "</div>";
    }

    return $format;
}

?> 