<?php
class Usuario {
    public string $usuario;
    public string $nome;
    public string $senha;

    public string $email;

    //método construtor das questões 
    public function __construct($usuario, $nome, $senha, $email){
        $this->usuario=$usuario;
        // declara o array questões, separando as alternativas 4 
        $this->email= $email;
        $this->senha=$senha;
        $this->nome=$nome;
    }
}
?>