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

        public function atualizarPlacar($valor) {
            $this->placar = $valor;
            Usuarios::getDAO()->atualizarUsuario($this->usuario, $this->toArray());
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

        private static function getDAO() {
            return new UsuariosDAO();
        }
    }
?>