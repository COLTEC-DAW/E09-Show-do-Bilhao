<?php
    class User
    {
        public $username;
        private $passwd;
        public $atQuestion;
        public static $nOfUsers;
        function __construct($username, $passwd, $atQuestion = 0)
        {
            $this->username = $username;
            $this->passwd = $passwd;
            $this->atQuestion = $atQuestion;
        }
        public static function WriteUser($user)
        {
            $file = simplexml_load_file("users.xml")
            or die("Erro ao abir XML das perguntas");
            $nOfUsers = (int) $file['size'];
            echo $nOfUsers;
            $file['size'] = $nOfUsers++;

            $newUser = $file->addChild("user");
            $newUser->addChild("name", $user->username);
            $newUser->addChild("passwd", password_hash($user->passwd, PASSWORD_DEFAULT));
            $newUser->addChild("atQuestion", $user->atQuestion);

            $file->asXML("users.xml");
        }
        private static function LoadUserFromFile($pos, $file)
        {
            $user = new User(
                $file->user[$pos]->name,
                $file->user[$pos]->passwd,
                (int)$file->user[$pos]->atQuestion,
            );
            return $user;
        }
        public static function LoadUsers()
        {
            $file = simplexml_load_file("users.xml")
            or die("Erro ao abir XML das perguntas");
            User::$nOfUsers = $file['size'];
            $list = [];

            for($i = 0; $i < User::$nOfUsers; $i++)
            {
                $list[$i] = User::LoadUserFromFile($i, $file);
            }
            
            return $list;
        }

        public function SaveUser()
        {
            $file = simplexml_load_file("users.xml");
            for($i = 0; $i < User::$nOfUsers; $i++)
            {
                $user = User::LoadUserFromFile($i, $file);
                if($this->CheckName($user->username) and $this->CheckPasswd($user->passwd))
                {
                    $file->user[$i]->atQuestion = $this->atQuestion;
                    return;
                }
            }
            return;
        }

        public function CheckPasswd($input)
        {
            echo password_verify($input, $this->passwd);
            
            return password_verify($input, $this->passwd);
        }
        public function CheckName($input)
        {
            echo trim($input) == $this->username;
            
            return trim($input) == $this->username;
        }
    } 
?>