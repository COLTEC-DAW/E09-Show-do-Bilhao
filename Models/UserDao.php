<?php
    require "dao.php";
    class UserDao implements DAO{

        function read($login){
            $usuarios = json_decode(file_get_contents("Arquivos/users.json"));
            foreach ( $usuarios as $user ) {
                if ($user->login == $login){
                    $usuario_certo = new User($user->nome, $user->senha, $user->login, $user->email); 
                    return $usuario_certo;
                }
            }
            return null;
        }

        function insert($usuario){
            $usuarioJSON = json_encode($usuario);
            $ArquivoJSON = file_get_contents("Arquivos/users.json");
            if($ArquivoJSON == "[]"){ // Nenhum usuario cadastrado
                $ArquivoJSON = str_replace("[", "[".$usuarioJSON, $ArquivoJSON);
            }else{
                $ArquivoJSON = str_replace("[", "[".$usuarioJSON.",", $ArquivoJSON);
            }

            $file = fopen("Arquivos/users.json", "w");
            fwrite($file, $ArquivoJSON);
            fclose($file); 
        }

    }

?>