<?php
class Usuario
{
    private $username;
    private $pontuacao;
    private $storage = "partials/users.json";
    private $stored_users;
    private $loop = 0;

    public function aumentarPontuacao()
    {
        foreach ($this->stored_users as $user) {
            if ($user['username'] == $this->username) {
                $this->pontuacao = $user['pontuacao'];
                $this->stored_users[$this->loop]['pontuacao'] += 1;
            }
            $this->loop++;
        }
        $this->loop = 0;
        $newJsonString = json_encode($this->stored_users);
        file_put_contents('partials/users.json', $newJsonString);
    }

    public function __getUsername()
    {
        return $this->username;
    }

    public function __getPontuacao()
    {
        return $this->pontuacao;
    }
    public function __construct($username)
    {
        $this->username = $username;
        $this->stored_users = json_decode(file_get_contents($this->storage), true);
    }
}
