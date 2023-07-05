<?php 
$login = $_POST['login'];
$senha = $_POST['senha'];

if($_POST['registrar']){
    registrar();
}

if($_POST['logar']){
    login();
}

if ($_POST['logOut']) {
    unset($_SESSION['user']);
}

function registrar(){

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
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
        array_push($lerArquivo, new User($login, $senha));
        fseek($arquivo, 0, SEEK_SET);
        fwrite($arquivo, json_encode($lerArquivo));
        fclose($arquivo);
    }else {
        echo "Usuario já existe meu mano";
    }
}

function login(){

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    $arquivo = fopen("users.json", "r");
    $lerArquivo = json_decode(fread($arquivo, filesize("users.json")));

    foreach ($lerArquivo as $usuario) {
        if ($usuario->login == $login && $usuario->senha == $senha) {
            $_SESSION['user'] = $usuario;
            break;
        }
    }

    fclose($arquivo);
}

?>