<?php
include("menu.inc");
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($_POST['registrar']) {
    registrar();
}

if ($_POST['logar']) {
    login();
}

if ($_POST['logOut']) {
    unset($_SESSION['Usuarios']);
    header("Location: index.php");
}

function registrar()
{

    echo "
    <form method='POST' action='cadastro.php'>
    
        <fieldset>

                <p>
                    <label> Nome </label>
                </p>
                    <input type='text' name='nome' id='nome' value=''>
                <p>
                    <label> Email </label>
                </p>
                    <input type='email' name='email' id='email' value=''>
                <p>
                    <label> Login </label>
                </p>
                    <input type='text' name='login' id='login' value=''>
                <p>
                    <label> Senha </label>
                </p>
                <input type='password' name='senha' id='senha' value=''>
                <input type='submit' name='registrar' value='Resgistrar'>

        </fieldset>
    </form>
    ";
}


function login()
{

    $eUsuario = false;
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $arquivo = fopen("usuarios.json", "r");
    $lerArquivo = json_decode(fread($arquivo, filesize("usuarios.json")));

    foreach ($lerArquivo as $usuario) {
        if ($usuario->login == $login && $usuario->senha == $senha) {
            $eUsuario = true;
            $_SESSION['Usuarios'] = $usuario;
            break;
        }
    }

    fclose($arquivo);

    if ($eUsuario == true) {
        echo "
        <form action='perguntas.php' method='GET'>
            <p> Tudo Certo, podemos jogar! </p>
            <input type='submit' value='Jogar'>
            <input type='hidden' name='id' value='0'>
        </form>
        ";
    } else {
        echo "Usuario nao possui registro. Realize seu cadastro";
        registrar();
    }

    return;
}

include("rodape.inc");
?>