<?php
    class UsuariosDAO {
        private static $path = "../data/usuarios.json";

        public static function criarUsuario($usuario) {

        }

        public static function atualizaUsuario($usuario, $newUsuario) {

        }

        public static function getUsuarioByUsername($username) {

        }

        private static function getData() {
            $json = file_get_contents(UsuariosDAO::$path);
            $data = json_decode($json);
            return $data;
        }


    }

?>