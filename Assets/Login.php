<?php

function debugConsole($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

class User
{

    private $nome;
    private $senha;

    public function __construct($passwordF, $nameF) {

        $this->nome = $nameF;
        $this->senha = $passwordF;

    }

    public function pegarNome() {
        return $this->nome;
    }

    public function pegarSenha(){
        return $this->senha;
    }


    public static function validarUsuario($nome, $senha) {

        $ArqJson = file_get_contents("Users.json");
        $decode = json_decode($ArqJson, true);
        foreach ($decode as $Logado) {
            if ($Logado["nome"] == $nome) {
                if ($Logado["senha"] == $senha) {
                    return $Logado;
                }
            }
        }
        return false;
    }

    public function cadastrarUsuario() {

        $ArqJson = file_get_contents("Users.json");
        $decode = json_decode($ArqJson, true);
        foreach ($decode as $Logado) {
            if ($Logado["nome"] == $this->login) {
                return false;
            }
        }
         $newUser = array(
            "senha" => $this->senha,
            "nome" => $this->nome,
         );
        $decode[] = $newUser;

            $ArqJson = json_encode($decode, JSON_PRETTY_PRINT);
            file_put_contents("Users.json", $ArqJson);

        return true;

    }

} 

?>