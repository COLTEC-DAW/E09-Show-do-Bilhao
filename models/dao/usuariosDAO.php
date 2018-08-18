<?php
    class UsuariosDAO {
        private $data;
        public $path;

        public function __construct() {
            $this->path = $_SERVER['DOCUMENT_ROOT'] . '/data/usuarios.json';
            $json = file_get_contents($this->path);
            $this->data = json_decode($json);
        }

        public function criarUsuario($usuario) {
            $file = fopen($this->path, 'w');
            array_push($this->data, $usuario);
            $save = json_encode($this->data);
            fwrite($file, $save);
            fclose($file);
        }

        public function atualizarUsuario($username, $newUsuario) {
            $usuario = $this->getUsuarioByUsername($username);
            $key = array_search($usuario, $this->data);
            $this->data[$key] = $newUsuario;
            $file = fopen($this->path, 'w');
            $save = json_encode($this->data);
            fwrite($file, $save);
            fclose($file);
        }

        public function getUsuarioByUsername($username) {
            foreach ($this->data as $user) {
                if(strcmp($user->{'usuario'}, $username) == 0) {
                    return $user;
                }
            }
            return NULL;
        }
    }

?>