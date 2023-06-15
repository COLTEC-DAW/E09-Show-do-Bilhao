<?php class LoginUser{
    private $username;
    private $password;
    private $users;
    private $storage = "../users.json";
    public $message;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
        $this->users = json_decode(file_get_contents($this->storage), true);
        $this->logIn();
    }

    private function logIn(){
        foreach($this->users as $user){
            if($user['username'] == $this->username){
                if(password_verify($user['password'], $this->password)){
                    session_start();
                    $_SESSION['user'] = $this->username;
                    header("Location: index.php");
                    return $this->message = "Sucesso!";
                }
            }
        }
        return $this->message = "ERRO! Usuário ou senha incorreto";
    }
}
?>