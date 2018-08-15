<?php

    $in = $logged ? 'd-none' : '';
    $out = !$logged ? 'd-none' : '';

    echo
    "<nav class='navbar navbar-dark bg-dark'>
        <span class='navbar-brand mb-0 h1'>Show do Bilhão</span>
        <form class='form-inline $in' action='../controllers/login.php' method='post'>
            <input class='form-control mr-sm-2' type='text' name='user' placeholder='Usuario' aria-label='nome' required>
            <input class='form-control mr-sm-2' type='password' name='pass' placeholder='Senha' aria-label='nome' required>
            <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Jogar</button>
        </form>
        <a class='btn btn-light $out' href='../controllers/logout.php'>Sair</a>
    </nav>";
?>

