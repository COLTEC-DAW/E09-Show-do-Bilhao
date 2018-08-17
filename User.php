<?php
    class User{
        private var $usuario = $_POST["EntradaUsuario"];
        private var $senha = $_POST["EntradaSenha"];
        private var $nome = $_POST["EntradaNome"];
        private var $email = $_POST["EntradaEmail"];

        function User($usuario, $senha, $nome, $email) {
            $this->usuario = $usuario;
            $this->senha = $senha;
            $this->nome = $nome;
            $this->email = $email;
            $this->usuarioLogin = $usuarioLogin;
            $this->senhaLogin = $senhaLogin;
        }
        

        //essa função evita cadastros com mesmo usuario
        private function verificaCadastro($usuario, $email){
            $arquivo_str = file_get_contents("data/usuarios.json");

            $usuarios = json_decode($arquivo_str);

            $resultado = true;

            foreach ($usuarios as $valor) {
                if ($valor->usuario == $usuario) {
                    $resultado = false;
                }
            }

            if ($resultado == true) {
                adicionaUsuario($usuario, $senha, $nome, $email);
                header("location:index.php");
            }
            elseif ($resultado == false) {
                    header("location:cadastro.php");
            }
        }

        //adiciona o usuario no arquivo .json
        private function adicionaUsuario($usuario, $senha, $nome, $email) {
            $usuarioAtual = array(
                "usuario"=>$usuario,
                "senha"=>$senha,
                "nome"=>$nome,
                "email"=>$email
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
        function verificaUsuario($usuario, $senha){
            session_start();

            $_SESSION["usuario"] = $usuario;
            $_SESSION["senha"] = $senha;

            $verificacao =  false;

            $arquivo_str = file_get_contents("data/usuarios.json");

            $usuarios = json_decode($arquivo_str);

            foreach ($usuarios as $valor) {
                if (($valor->usuario == $usuario) && ($valor->senha == $senha)) {
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