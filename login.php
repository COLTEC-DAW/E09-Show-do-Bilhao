<?php

include("menu.inc");
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($_POST['logar']) {
    login();
}

if ($_POST['registrar']) {
    registrar();
}
function registrar() {

    echo "
        <form method='POST' action='cadastro.php'>
            Nome <input type='text' name='nome' id='nome'><br>
            Email <input type='email' name='email' id='email'><br>
            Login <input type='text' name='login' id='login'><br>
            Senha <input type='password' name='senha' id='senha'><br>
            <input type='submit' name='registrar' value='Resgistrar'>
        </form>
    ";

}

function login() {

    $User = false;
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $arquivo = fopen("usuarios.json", "r");
    
    if ($arquivo) {
        
        $SizeArquivo = filesize("usuarios.json");

        if ($SizeArquivo > 0) {

            $ReadArquivo = json_decode(fread($arquivo, filesize("usuarios.json")));
        
            foreach ($ReadArquivo as $usuario) {
                if ($usuario->login == $login && $usuario->senha == $senha) {
                    $User = true;
                    $_SESSION['User'] = $usuario;
                    break;
                }

                elseif($usuario->login == $login && $usuario->senha != $senha) {
                    $SenhaIncorrect = true;
                }
            }
        }
    }

    fclose($arquivo);

    if ($User == true) {
        echo "
        <form action='perguntas.php' method='GET'>
            <p> <- Sucesso, vamos ao jogo -> </p>
            <input type='submit' value='Jogar'>
            <input type='hidden' name='id' value='0'>
        </form>
        ";
    } 
    
    elseif($SenhaIncorrect) {
        echo "<p> Senha Incorreta </p>
            <form action='index.php' method='POST'>
            <input type='submit' name='logar' value='Logar Novamente'>
            ";
    }

    else {
        echo "<p> Usuário não possui cadastro, realize o seu: </p>
        <form action='login.php' method='POST'>
        <input type='submit' name='registrar' value='Cadastrar'>
        ";
    }
}

include("rodape.inc");

?>