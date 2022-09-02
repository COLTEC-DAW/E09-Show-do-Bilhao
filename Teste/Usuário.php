<?php
    final class Usuario
    {
        public string $login;
        public string $senha;
        public string $email;
        public string $nome;
        public function __construct(string $login, string $senha, string $email, string $nome)
        {
            $this->login = $login;
            $this->senha = $senha;
            $this->email = $email;
            $this->$nome = $nome;
        }
    }
?>