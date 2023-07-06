<?php class User{
    private $username;
    private $pontMax;
    private $pontAtual;
    private $users;
    private $storage = "Json/users.json";
    private $loop = 0;

    public function __construct($username){
        $this->username = $username;
        $this->users = json_decode(file_get_contents($this->storage), true);
        foreach($this->users as $user){
            if($user['username'] == $this->username){
                $this->pontMax = $user['pontMax'];
                $this->pontAtual = $user['pontAtual'];
            }
        }
    }

    public function checaPont(){
        foreach($this->users as $user){
            if($user['username'] == $this->username){
                if($this->pontAtual >= $this->pontMax){
                    return true;
                }
            }
        }
        return false;
    }

    public function aumentaPontA(){
        $this->pontAtual++;
        foreach($this->users as $user){
            if($user['username'] == $this->username){
                $this->users[$this->loop]['pontAtual'] = $this->pontAtual;
            }
            $this->loop++;
        }
        $this->loop = 0;
        file_put_contents($this->storage, json_encode($this->users));
    }

    public function aumentaPontM(){
        foreach ($this->users as $user) {
            if ($user['username'] == $this->username) {
                $this->users[$this->loop]['pontMax'] = $this->pontAtual;
            }
            $this->loop++;
        }
        $this->loop = 0;
        file_put_contents($this->storage, json_encode($this->users));
    }

    public function zeraPont(){
        foreach ($this->users as $user) {
            if ($user['username'] == $this->username) {
                $this->users[$this->loop]['pontAtual'] = 0;
            }
            $this->loop++;
        }
        $this->loop = 0;
        file_put_contents($this->storage, json_encode($this->users));
    }

    public function __getUsername(){
        return $this->username;
    }

    public function __getPont(){
        return $this->pontMax;
    }

    public function __getAtual(){
        return $this->pontAtual;
    }

    public function __setLast(){
        setcookie($this->username."pont", $this->pontAtual, time() + 86400);
    }

    public function __getName(){
        return $this->username;
    }
}