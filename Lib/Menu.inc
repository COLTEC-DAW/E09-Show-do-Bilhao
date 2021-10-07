<?php 

function GetMenu(){
    $format = 
    '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Show do Bilhão</a>
        <div class="collapse navbar-collapse nav-pills" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Exibicao_ALL.php">Questões</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?Logout=true">Logout</a>
                </li>
            </ul>
        </div>
    </nav>';

    if(isset($_SESSION['username']) && !isset($_GET['Logout'])){
        $format = $format .
        "<div>
            Olá ". $_SESSION['username'] .  ",</br>" .
            "Ultimo acesso: " . $_COOKIE['UltimoJogo_Data'] . "</br>" .
            "Pontuação anterior: " . $_COOKIE['UltimoJogo_Pontos'] .     "</br>" .
        "</div>";
    }

    return $format;
}

?>