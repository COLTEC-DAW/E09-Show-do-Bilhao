<?php
    class User{
        private $usuario;
        private $senha;
        private $nome;
        private $email;

        function User($usuario, $senha, $nome, $email) {
            $this->usuario = $usuario;
            $this->senha = $senha;
            $this->nome = $nome;
            $this->email = $email;
        }
        

        //essa função evita cadastros com mesmo usuario
        function verificaCadastro(){
            $arquivo_str = file_get_contents("data/usuarios.json");

            $usuarios = json_decode($arquivo_str);

            $resultado = true;

            foreach ($usuarios as $valor) {
                if ($valor->usuario == $this->usuario) {
                    $resultado = false;
                }
            }

            if ($resultado == true) {
                $this->adicionaUsuario();
                header("location:index.php");
            }
            elseif ($resultado == false) {
                    header("location:cadastro.php");
            }
        }

        //adiciona o usuario no arquivo .json
        function adicionaUsuario() {
            $usuarioAtual = array(
                "usuario"=>$this->usuario,
                "senha"=>$this->senha,
                "nome"=>$this->nome,
                "email"=>$this->email
            );

            $usuarioAtual_str = json_encode($usuarioAtual);

            //retira o colchete e coloca a vírgula no arquivo
            $arquivo_str = file_get_contents("data/usuarios.json");
            $arquivo_str_novo = str_replace("]", ",", $arquivo_str);

            //abre o arquivo
            $usuarios = fopen("data/usuarios.json", "w"); //sobreescreve
            fwrite($usuarios, $arquivo_str_novo . $usuarioAtual_str . "]");
            fclose($usuarios);
        }

        //Verifica nos arquivos o usúario que está logando
        function verificaUsuario(){
            session_start();

            $_SESSION["usuario"] = $this->usuario;
            $_SESSION["senha"] = $this->senha;

            $verificacao =  false;

            $arquivo_str = file_get_contents("data/usuarios.json");

            $usuarios = json_decode($arquivo_str);

            foreach ($usuarios as $valor) {
                if (($valor->usuario == $this->usuario) && ($valor->senha == $this->senha)) {
                    $verificacao = true;
                    header("location:perguntas.php");
                    break;
                }
            }
            
            if (!$verificacao) {
                session_destroy();
                header("location:index.php");
            }
        }
    }
?>