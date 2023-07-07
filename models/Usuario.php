<?php
class Usuario
{
    private $nome;
    private $nomeUsuario;
    private $email;
    private $senha;

    public function __construct($nome, $nomeUsuario, $email, $senha)
    {
        $this->nome = $nome;
        $this->nomeUsuario = $nomeUsuario;
        $this->email = $email;
        $this->senha = $senha;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getSenha()
    {
        return $this->senha;
    }
}
?>