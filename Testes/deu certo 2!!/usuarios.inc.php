<?php

    class Usuario{

        var $nome;
        var $email;
        var $username;
        var $senha;

        public function __construct($nome, $email, $username, $senha){
            
            $this->nome = $nome;
            $this->email = $email;
            $this->username = $username;
            $this->senha = $senha;
            
        }
    }

    function userExiste($username, $password, $usuarios){
        
        foreach($usuarios as $usuario){
            if(($usuario->username === $username) && ($usuario->senha === $password)){
                return $usuario;
            }
        }
        return null;
    }

    function login($username, $senha, $usuarios){
        
        $usuarioM = userExiste($username, $senha, $usuarios);

        if ($usuarioM) {

            $usuario = serialize($usuarioM);
            $_SESSION["usuario"] = $usuario;

            echo "Bem vindo, ". $usuarioM->username ."! Vamos iniciar o jogo!";
            echo '
                    <form action="jogo.php?id=0" method="post">
                        <input type="submit" name="go" value="Start">
                    </form>';

        } else {
            echo "Email ou senha inválidos. Tente novamente.";
            echo '
                    <form action="index.php" method="post">
                        <input type="submit" name="volta" value="Volta">
                    </form>';
        }
    }

?>