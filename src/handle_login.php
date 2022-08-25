<?php
    
    session_start();

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $arquivo_usuarios = json_decode(file_get_contents("usuarios.json"));
    if($arquivo_usuarios == null) header("Location: cadastro_usuarios.php", TRUE, 301);

    foreach ($arquivo_usuarios as $usuarios){
        if($usuarios->login == $login && $usuarios->senha == $senha){
            $_SESSION["senha"] = $_POST["senha"];
            $_SESSION["login"] = $_POST["login"];
            header("Location: pagina_inicial.php", TRUE, 301);
        }
    }

    echo 'Não foi achado o seu cadastro <br> Voltar à pagina de login: <a href="login.php"><button>Voltar</button></a>';

?>