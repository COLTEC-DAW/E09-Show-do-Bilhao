<?php
    $in = $logged ? 'd-none' : '';
    $out = !$logged ? 'd-none' : '';

    echo
    "<nav class='navbar navbar-dark bg-dark'>
        <span class='navbar-brand'>Show do Bilhão</span>
        <nav class='nav'>
            <div class='nav-item'>
                <a class='btn btn-outline-success $in' href='' data-toggle='modal' data-target='#login-modal'>Entrar</a>
            </div>
            <div class='nav-item'>
                <a class='nav-link $in' href='' data-toggle='modal' data-target='#signup-modal'>Criar conta</a>
            </div>
            <div class='nav-item'>
                <a class='nav-link $out' href='../pages/perfil.php'>Perfil</a>
            </div>
            <div class='nav-item'>
                <a class='nav-link $out' href='../controllers/logoutController.php'>Sair</a>
            </div>
        </nav>
    </nav>";
?>

