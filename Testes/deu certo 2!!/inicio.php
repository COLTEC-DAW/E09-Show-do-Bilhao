<?php
    require "usuarios.inc.php";
    session_start();

    $username = $_POST["username"];
    $senha = $_POST["senha"];

    if(file_exists("usuarios.json")){
        $json = file_get_contents("usuarios.json");
        $usuarios = json_decode($json);
        
    }else{
        $usuarios = [];
    }

    if(isset($_POST["cadastrar"])){
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        foreach($usuarios as $usuario){
            if($usuario->email == $email){
                echo "O email já está em uso. Tente Outro.";
                echo '
                    <form action="index.php" method="post">
                        <input type="submit" name="volta" value="Volta">
                    </form>';
                    exit();
            }
        }

        $novoUsuario = new Usuario($nome, $email, $username, $senha);

        $usuarios[] = $novoUsuario;
        $nomeCOOKIE = "lastSession" . $username;
        setcookie($nomeCOOKIE, date("d/m/Y H:i:s"));

        $json1 = json_encode($usuarios);
        file_put_contents("usuarios.json", $json1);

        login($username, $senha, $usuarios);
    }

    if (isset($_POST["login"])) {
        login($username, $senha, $usuarios);
    }
?>