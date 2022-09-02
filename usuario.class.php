<?php

class Usuario{
    private $nome;              private $email;             public $mensagem;
    private $usuario;           private $senha;

    private $arquivo = "usuarios.json";
    private $listaDeUsuarios;
    private $novoUsuario;

    public function __construct($nome, $usuario, $email, $senha){
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->email = $email;
        $this->senha = $senha;

        $this->listaDeUsuarios = json_decode(file_get_contents($this->arquivo));
        $this->novoUsuario = ["Nome" => $this->nome, "Usuario" => $this->usuario, "Email" => $this->email, "Senha" => $this->senha];

        if($this->VerificaUsuario() == true){
            $this->AdicionaUsuario();
        }
    }
 
    private function VerificaUsuario(){
        if(empty($this->nome) || empty($this->usuario) || empty($this->email) || empty($this->senha)){
            $this->mensagem = "Por favor, preencha todos os campos.";
            return false;
        }else{
            foreach($this->listaDeUsuarios as $usuarios){
                if($usuarios->Usuario == $this->usuario){
                    $this->mensagem = "Nome de usuario indisponivel.";
                    return false;
                }
            }
            return true;
        }
    }

    private function AdicionaUsuario(){
        fopen($this->arquivo, "w");

        if(!isset($this->listaDeUsuarios)){
            file_put_contents($this->arquivo, json_encode([$this->novoUsuario], JSON_PRETTY_PRINT));
        }else{
            array_push($this->listaDeUsuarios, $this->novoUsuario);
            file_put_contents($this->arquivo, json_encode($this->listaDeUsuarios, JSON_PRETTY_PRINT));
        }

        $this->mensagem = "Cadastro realizado com sucesso!";
    }
}

?>