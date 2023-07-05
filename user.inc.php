<?php
    class User
    {
        public $username;
        public $nickname;
        public $email;
        private $passwd;
        public $atQuestion;
        public static $nOfUsers;
        function __construct($username, $nickname, $email, $passwd, $atQuestion = 0)
        {
            $this->username = $username;
            $this->passwd = $passwd;
            $this->nickname = $nickname;
            $this->email = $email;
            $this->atQuestion = $atQuestion;
        }
        public static function WriteUser($user)
        {
            $file = simplexml_load_file("users.xml")
            or die("Erro ao abir XML do usuario");
            $size = (int) $file['size'];
            $file['size'] = (++$size);

            $newUser = $file->addChild("user");
            $newUser->addChild("username", $user->username);
            $newUser->addChild("nickname", $user->nickname);
            $newUser->addChild("email", $user->email);
            $newUser->addChild("passwd", password_hash($user->passwd, PASSWORD_DEFAULT));
            $newUser->addChild("atQuestion", $user->atQuestion);

            $file->asXML("users.xml");
        }
        private static function LoadUserFromFile($pos, $file)
        {
            $user = new User(
                $file->user[$pos]->username,
                $file->user[$pos]->nickname,
                $file->user[$pos]->email,
                $file->user[$pos]->passwd,
                (int)$file->user[$pos]->atQuestion,
            );
            return $user;
        }
        public static function LoadUsers()
        {
            $file = simplexml_load_file("users.xml")
            or die("Erro ao abir XML do usuario");
            User::$nOfUsers = (int)$file['size'];
            $list = [];

            for($i = 0; $i < User::$nOfUsers; $i++)
            {
                $list[$i] = User::LoadUserFromFile($i, $file);
            }

            return $list;
        }
        public static function GetUser($username)
        {
            $file = simplexml_load_file("users.xml")
            or die("Erro ao abir XML do usuario");
            User::$nOfUsers = (int)$file['size'];
            $user = null;

            for($i = 0; $i < User::$nOfUsers; $i++)
            {
                $user = User::LoadUserFromFile($i, $file);
                if($user->CheckName($username))
                {
                    return $user;
                }
            }
            
            return null;
        }

        public static function SaveUser($username)
        {
            $file = simplexml_load_file("users.xml");
            User::$nOfUsers = (int)$file['size'];
            for($i = 0; $i < User::$nOfUsers; $i++)
            {
                $user = User::LoadUserFromFile($i, $file);
                if($user->CheckName($username))
                {
                    $file->user[$i]->atQuestion = $_SESSION['atQuestion'];
                    $file->asXML("users.xml");
                    return;
                }
            }
            return;
        }

        public function CheckPasswd($input)
        {
            return password_verify($input, $this->passwd);
        }
        public function CheckName($input)
        {
            return trim($input) == $this->username;
        }
    } 
?>