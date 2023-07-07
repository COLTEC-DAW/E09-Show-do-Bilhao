<?php

/* NAO UTILIZE ESSA CLASSE: USE 'Gerenciador_de_Usuario' */
class Usuario
{
    public $nome;
    public $email;
    public $login;
    public $hash;

    public function __construct($nome, $email, $login, $senha)
    {
        $this->nome	= $nome;
        $this->email	= $email;
        $this->login	= $login;
        $this->hash	= hash('sha3-512', $senha);
    }
}

class Gerenciador_de_Usuario
{
    private $usuario;
    
    public function __construct($nome = 'Joao Eduardo', $email = 'jemaf@teiacoltec.org', $login = 'professor', $senha = 'Jemaf_100/10')
    {
       $this->usuario = new Usuario($nome, $email, $login, $senha);
    }

    public function obter_nome()
    {
	    return $this->usuario->nome;
    }

    public function obter_email()
    {
	    return $this->usuario->email;
    }

    public function obter_login()
    {
	    return $this->usuario->login;
    }

    public function toJSON()
    {
        return json_encode($this->usuario);
    }

    public function setFromJSON($textJSON)
    {
        $this->usuario	= json_decode($textJSON);
    }

    public function senha_correta($senha)
    {
        return hash('sha3-512', $senha) === $this->usuario->hash;
    }
}

?>
