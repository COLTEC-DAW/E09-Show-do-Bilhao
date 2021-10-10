<?php 

function Menu(){
    $format = 
    '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Show do Bilhão</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="exibicaoCompleta.php">Perguntas</a>
            </li>
            </ul>
        </div>
    </nav>';

    return $format;
}

?> 