<?php 

// Responsável por disponibilizar o menu & concatenar as informações que serão exibidas sobre o usuário.
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

    if(isset($_SESSION['PlayerData']) && !isset($_GET['Logout'])){
        $Bisc8 = "";
        if(isset($_COOKIE[$_SESSION['PlayerData']->UserName . '_UltimoJogo_Data'])){
            $Bisc8 = "Ultimo acesso: " . $_COOKIE[$_SESSION['PlayerData']->UserName .'_UltimoJogo_Data'] . "</br>" .
                    "Pontuação anterior: " . $_COOKIE[$_SESSION['PlayerData']->UserName . '_UltimoJogo_Pontos'] . "</br>";
        }
        $format = $format .
        "<div>
            Olá ". $_SESSION['PlayerData']->Name .  ",</br>"
            . $Bisc8 .
        "</div>";
    }
    
    return $format;
}

?>