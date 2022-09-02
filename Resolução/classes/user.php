<?php
class Usuario
{
    private $username;
    private $pontuacao_max;
    private $pontuacao_atual;
    private $storage = "partials/users.json";
    private $stored_users;
    private $loop = 0;

    public function checaPontuacao(){
        foreach ($this->stored_users as $user) {
            if ($user['username'] == $this->username) {
                if($this->pontuacao_atual >= $this->pontuacao_max)
                {
                    return true;
                }
            }
        }
        return false;
    }

    public function aumentarPontuacaoAtual(){
        $this->pontuacao_atual+=1;
        foreach ($this->stored_users as $user) {
            if ($user['username'] == $this->username) {
                $this->stored_users[$this->loop]['pontuacao_atual'] = $this->pontuacao_atual;
            }
            $this->loop++;
        }
        $this->loop=0;
        $newJsonString = json_encode($this->stored_users);
        file_put_contents('partials/users.json', $newJsonString);
    }

    public function zeraPontuacaoAtual(){
        foreach ($this->stored_users as $user) {
            if ($user['username'] == $this->username) {
                $this->stored_users[$this->loop]['pontuacao_atual'] = 0;
            }
            $this->loop++;
        }
        $this->loop=0;
        $newJsonString = json_encode($this->stored_users);
        file_put_contents('partials/users.json', $newJsonString);

    }

    public function aumentarPontuacaoMaxima()
    {
        foreach ($this->stored_users as $user) {
            if ($user['username'] == $this->username) {
                $this->stored_users[$this->loop]['pontuacao_max'] = $this->pontuacao_atual;
            }
            $this->loop++;
        }
        $this->loop=0;
        $newJsonString = json_encode($this->stored_users);
        file_put_contents('partials/users.json', $newJsonString);
    }

    public function __getUsername()
    {
        return $this->username;
    }

    public function __getPontuacao()
    {
        return $this->pontuacao_max;
    }
    public function __construct($username)
    {
        $this->username = $username;
        $this->stored_users = json_decode(file_get_contents($this->storage), true);
        foreach ($this->stored_users as $user) {
            if ($user['username'] == $this->username) {
                $this->pontuacao_atual = $user['pontuacao_atual'];
                $this->pontuacao_max = $user['pontuacao_max'];
            }
        }
    }
}
