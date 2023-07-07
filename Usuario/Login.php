<?php
    class login{
        private $login;
        private $senha;
        private $arquivo = "Usuario/Usuarios.json";
        private $usuarios;
        private $usuario;

        //Verifica o login e o usuário
        public function __construct($login, $senha){
            $this->login = $login;
            $this->senha = $senha;
            $this->usuarios = json_decode(file_get_contents($this->arquivo), true);
            $this->logar();
        }

        private function logar(){
            $a = 0;
            for ($i=0; $i < count($this->usuarios); $i++) {
			    if($this->login == $this->usuarios[$i]['login']){
                    if (password_verify($this->senha, $this->usuarios[$i]['senha'])) {
                        $this->usuario = $this->usuarios[$i];
                        $_SESSION['logado'] = $this->usuario;
                        $a++;
                    } else{
                        header("location: /Logar.php");
                    }
			    }
		    }

            //Caso o login são exista:
            if($a == 0){
                header("location: /Logar.php");
            }
        }

    }
?>