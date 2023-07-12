<?php 
    class User{    
        public $name; 
        public $nickname; 
        public $password; 
        public $email;

        public function __construct($nickname, $password){
            $this->nickname = $nickname;
            $this->password = $password;
        }

        public static function criarUsuario($name, $nickname, $email, $password){
            $users = User::pegarUsuarios();

            foreach($users as $user){
                if($user['email'] === $email || $user['nickname'] === $nickname) return false;
            }
            $novoUser = array('name' => $name, 'nickname' => $nickname, 'email' => $email, 'password' => $password);
            $users[] = $novoUser;
            $jsonData = json_encode($users, JSON_PRETTY_PRINT);
            file_put_contents(__DIR__ . "/db/users.json" , $jsonData);
            $_SESSION['isLogged'] = json_encode(new User($nickname, $email));
            setcookie('ultimaPontuacao', 0);
            return true;
        }

        public static function loginValido($nickname, $password){
            $users = User::pegarUsuarios();
            foreach($users as $user){
                if($user['nickname'] === $nickname && $user['password'] === $password) return true;
            }
            return false;
        }

        public static function pegarUsuarios(){
            return (array) json_decode(file_get_contents(__DIR__ . "/db/users.json"), true);
        }

        public static function userToJson($user){
            return json_encode($user);
        }
    }
?>
