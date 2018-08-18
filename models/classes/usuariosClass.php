<?php
    class Usuarios {
        private $nome;
        private $email;
        private $usuario;
        private $senha;
        private $placar;

        public function __construct($nome, $email, $usuario, $senha, $placar = 0) {
            $this->nome = $nome;
            $this->email = $email;
            $this->usuario = $usuario;
            $this->senha = $senha;
            $this->placar = $placar;
        }

        public function adicionarUsuario($confirm) {
            $erro = 0;
            if($this->senha != $confirm) {
                $erro += 1;
            }
            if(Usuarios::getDAO()->getUsuarioByUsername($this->usuario) != NULL) {
                $erro += 2;
            }
            if($erro == 0) {
                Usuarios::getDAO()->criarUsuario($this->toArray());
            }
            return $erro;
        }

        public static function atualizarPlacar($usuario, $valor) {
            $antigo = Usuarios::getDAO()->getUsuarioByUsername($usuario);
            $novo = new Usuarios($antigo->{'nome'}, $antigo->{'email'}, $antigo->{'usuario'}, $antigo->{'senha'}, $valor);
            Usuarios::getDAO()->atualizarUsuario($usuario, $novo->toArray());
        }

        public function toArray() {
            return array(
                'nome' => $this->nome,
                'email' => $this->email,
                'usuario' => $this->usuario,
                'senha' => $this->senha,
                'placar' => $this->placar
            );
        }

        public static function autentica($usuario, $senha) {
            $data = Usuarios::getDAO()->getUsuarioByUsername($usuario);
            return strcmp($data->{'senha'}, $senha);
        }

        public static function getArray($usuario) {
            $user = Usuarios::getDAO()->getUsuarioByUsername($usuario);
            return array(
                'nome' => $user->{'nome'},
                'email' => $user->{'email'},
                'usuario' => $user->{'usuario'},
                'senha' => $user->{'senha'},
                'placar' => $user->{'placar'}
            );
        }

        public static function getPlacar($usuario) {
            return Usuarios::getDAO()->getUsuarioByUsername($usuario)->{'placar'};
        }

        private static function getDAO() {
            return new UsuariosDAO();
        }
    }
?>