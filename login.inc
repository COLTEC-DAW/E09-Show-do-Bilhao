<?php 
$login = $_POST['login'];
$senha = $_POST['senha'];

if(isset($_POST['registrar'])){
    registrar();
}

if(isset($_POST['logar'])){
    login();
}

if (isset($_POST['logOut'])) {
    unset($_SESSION['user']);
}

function registrar(){

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    $arquivo = fopen("users.json", "r+");
    if(filesize("users.json") > 0){
        $lerArquivo = json_decode(fread($arquivo, filesize("users.json")));
    }else{
        $lerArquivo = array();
    }
    $usuarioJaExiste = false;
    foreach ($lerArquivo as $usuario) {
        if ($usuario->login == $login) {
            $usuarioJaExiste = true;
            break;
        }
    }

    if(!$usuarioJaExiste){
        array_push($lerArquivo, new User($login, $senha, $email, $nome));
        fseek($arquivo, 0, SEEK_SET);
        fwrite($arquivo, json_encode($lerArquivo));
        fclose($arquivo);
    }else {
        echo "Usuario já existe";
    }
}

function login(){

    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);
    
    $loginErrado = false;
    $arquivo = fopen("users.json", "r");
    $lerArquivo = json_decode(fread($arquivo, filesize("users.json")));

    foreach ($lerArquivo as $usuario) {
        if ($usuario->login == $login && $usuario->senha == $senha) {
            $_SESSION['user'] = $usuario;
            break;
        }else{
            $loginErrado = true;
        }
    }

    if ($loginErrado == true) {
        echo "Login ou senha incorretos";
    }

    fclose($arquivo);
}

?>