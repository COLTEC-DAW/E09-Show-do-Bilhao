<?php
class User
{
    private $nome;
    private $login;
    private $senha;
    private $email;

    public function __construct($nome, $login, $senha, $email)
    {
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
        $this->email = $email;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public static function entra_login($login, $senha)
    {
        $temp = file_get_contents("./usuarios.json");
        $dados_usuario = json_decode($temp, true);
        if ((User::verifica_login($login, $senha, $dados_usuario)) == -1) {
            return null;
        } else {
            $nome = $dados_usuario[User::verifica_login($login, $senha, $dados_usuario)]["nome"];
            $email = $dados_usuario[User::verifica_login($login, $senha, $dados_usuario)]["email"];
            return new User($nome, $login, $senha, $email);
        }
    }
    public function cadastra_usuario()
    {
        $temp = file_get_contents("./usuarios.json");
        $dados_usuario = json_decode($temp, true);
        if (!($this->verifica_cadastro($dados_usuario))) {
            return false;
        } else {
            $usuario_novo = array(
                "nome" => $this->nome,
                "login" => $this->login,
                "senha" => $this->senha,
                "email" => $this->email
            );
            $dados_usuario[] = $usuario_novo;
            $temp = json_encode($dados_usuario, JSON_PRETTY_PRINT);
            file_put_contents("./usuarios.json", $temp);
        }
        return true;
    }



    private static function verifica_login($login, $senha, $dados)
    {
        foreach ($dados as $indice => $usuario) {
            if ($usuario["login"] == $login) {
                if ($usuario["senha"] == $senha) {
                    return $indice;
                }
            }
        }
        return -1;
    }

    private function verifica_cadastro($dados)
    {
        foreach ($dados as $usuario) {
            if ($usuario["login"] == $this->login || $usuario["email"] == $this->email) {
                return false;
            }
        }

        return true;
    }
    public function limpa()
    {
        file_put_contents("./usuarios.json", "[]");
    }
}
