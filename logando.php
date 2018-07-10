<?php
    
    $usuarios = json_decode(file_get_contents("Arquivos/users.json"););
    
    foreach ( $usuarios as $user ){
        if ($user->nome == $_POST["nome"] && $user->senha == $_POST["senha"]){
            // Cadastrado
            header("Location:perguntas.php");
        }
    }



?>
