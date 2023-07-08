<?php

    include("menu.inc");
    require("usuarios.php");

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $arquivo = fopen("usuarios.json", "r+");

    if (filesize("usuarios.json") > 0) {
        $ReadArquivo = json_decode(fread($arquivo, filesize("usuarios.json")));
    } 
    
    else {
        $ReadArquivo = array();
    }

    $UserExistente = false;

    foreach ($ReadArquivo as $usuario) {
        if ($usuario->login == $login) {
            $UserExistente = true;
            break;
        }
    }

    if (!$UserExistente) {
        array_push($ReadArquivo, new Usuarios($nome, $email, $login, $senha));
        fseek($arquivo, 0, SEEK_SET);
        fwrite($arquivo, json_encode($ReadArquivo));
        fclose($arquivo);
        $_SESSION['User'] = new Usuarios($nome, $email, $login, $senha);
        $UserCriado = true;
    } 
    
    else {
        echo "
            <form action='index.php' method='POST'>
                <p> Este usuário já existe -- Realize um login correto </p>
                <input type='submit' value='Voltar para logar'>
                </form>
            ";
    }

    if ($UserCriado) {
        echo "
            <form action='perguntas.php' method='GET'>
                <p> Sucesso, vamos ao jogo :) </p>
                <input type='submit' value='Jogar'>
                <input type='hidden' name='id' value='0'>
            </form>
            ";
    }

    include("rodape.inc");

?>