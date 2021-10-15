<?php
class User
{
    private $nome;
    private $email;
    private $login;
    private $senha;

    public function __construct($nome, $email, $login, $senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->login = $login;
        $this->senha = $senha;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Verifica se há algum erro nos dados enviados no cadastro, e, se existir, retorna a descrição desse.
     * @return string|null A mensagem do erro (caso esse exista) ou 'null'
     */
    public function cadastra()
    {
        $strJson = file_get_contents("./jsons/usuarios.json");
        $decodedJson = json_decode($strJson, true);

        // Só faz o cadastro se o email e a senha não existirem no sistema
        if ($this->validaCadastro($decodedJson)) {
            $novo = array(
                "nome" => $this->nome,
                "email" => $this->email,
                "login" => $this->login,
                "senha" => $this->senha
            );

            $decodedJson[] = $novo;

            $strJson = json_encode($decodedJson, JSON_PRETTY_PRINT);
            file_put_contents("./jsons/usuarios.json", $strJson);
        } else {
            return false;
        }

        // Se chegou até aqui, deu tudo certo
        return true;
    }

    public static function fazLogin($login, $senha)
    {
        $strJson = file_get_contents("./jsons/usuarios.json");
        $decodedJson = json_decode($strJson, true);

        $i = User::validaLogin($login, $senha, $decodedJson);

        // Se estiver tudo certo, cria um novo User com todas as informações
        if ($i != -1) {
            $nome = $decodedJson[$i]["nome"];
            $email = $decodedJson[$i]["email"];

            return new User($nome, $email, $login, $senha);
        } else {
            return null;
        }
    }

    private function validaCadastro($array)
    {
        foreach ($array as $item) {
            if ($item["email"] == $this->email || $item["login"] == $this->login) {
                return false;
            }
        }

        // Se chegou até aqui, não existe email ou login igual - tudo certo!
        return true;
    }

    private static function validaLogin($login, $senha, $array)
    {
        foreach ($array as $key => $value) {
            if ($value["login"] == $login) {
                if ($value["senha"] == $senha) {
                    return $key;
                }
            }
        }
        // Se chegou até aqui, existe algum login igual ou a senha está incorreta.
        return -1;
    }

    public function limpaJson()
    {
        file_put_contents("./jsons/usuarios.json", "[]");
    }
}
