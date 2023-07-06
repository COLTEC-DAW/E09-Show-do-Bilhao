<?php 
    class User {
        private $name;
        private $nickname;
        private $password;
        private $email;
    
        public function __construct($name, $nickname, $email, $password) {
            $this->name = $name;
            $this->nickname = $nickname;
            $this->email = $email;
            $this->password = $password;
        }
    
        public static function getUsers() {
            $usersData = file_get_contents(__DIR__ . "/db/users.json");
            $usersArray = json_decode($usersData, true);
            $users = [];
            foreach ($usersArray as $userData) {
                $user = new User(
                    $userData['name'],
                    $userData['nickname'],
                    $userData['email'],
                    $userData['password']
                );
                $users[] = $user;
            }
            return $users;
        }
    
        public static function isValidLogin($nickname, $password) {
            $users = User::getUsers();
            foreach ($users as $user) {
                if ($user->getNickname() === $nickname && $user->getPassword() === $password) {
                    return true;
                }
            }
            return false;
        }
    
        public static function createUser($name, $nickname, $email, $password) {
            $users = User::getUsers();
            foreach ($users as $user) {
                if ($user->getEmail() === $email || $user->getNickname() === $nickname) {
                    return false;
                }
            }
            $newUser = new User($name, $nickname, $email, $password);
            $users[] = $newUser;
            $jsonData = json_encode($users, JSON_PRETTY_PRINT);
            file_put_contents(__DIR__ . "/db/users.json", $jsonData);
            return true;
        }
    
        public function getName() {
            return $this->name;
        }
    
        public function getNickname() {
            return $this->nickname;
        }
    
        public function getPassword() {
            return $this->password;
        }
    
        public function getEmail() {
            return $this->email;
        }
    }    
?>