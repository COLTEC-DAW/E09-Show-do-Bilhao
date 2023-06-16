<?php class SignUp{
    private $name;
    private $email;
    private $username;
    private $password;
    private $passwordCrypt;
    private $pontMax = 0;
    private $pontAtual = 0;
    private $new;
    private $users;
    private $storage = "Json/users.json";
    public $message;

    public function __construct($name, $email, $username, $password){
        $this->name = trim($name);
        $this->email = trim($email);
        $this->username = trim($username);
        $this->password = trim($password);
        $this->passwordCrypt = password_hash($this->password, PASSWORD_DEFAULT);
        $this->users = json_decode(file_get_contents($this->storage), true);
        $this->new = ["name" => $this->name,
        "email" => $this->email,
        "username" => $this->username,
        "password" => $this->passwordCrypt,
        "pontMax" => $this->pontMax,
        "pontAtual" => $this->pontAtual];

        if($this->isValid()){
            $this->insertUser();
        }
    }

    private function isValid(){
        if(empty($this->name) 
        || empty($this->email) 
        || empty($this->username) 
        || empty($this->password)){
            $this->message = "Algum campo não foi preenchido";
            return false;
        } else {
            return true;
        }
    }

    private function insertUser(){
        if($this->alreadyExists() == FALSE){
            array_push($this->users, $this->new);
            if(file_put_contents($this->storage, json_encode($this->users, JSON_PRETTY_PRINT))){
                return $this->message = "Sucesso!";
            } else {
                return $this->message;
            }
        }
    }

    private function alreadyExists(){
        foreach($this->users as $user){
            if($this->username == $user['username']){
                $this->message = "Esse usuário já existe";
                return true;
            }
        }
        return false;
    }
}
?>