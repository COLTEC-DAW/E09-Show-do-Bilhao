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
        function WriteUser($user)
        {
            
        }
        public static function LoadUser($pos)
        {

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
            echo User::$nOfUsers;

            for($i = 0; $i < User::$nOfUsers; $i++)
            {
                $list[$i] = User::LoadUserFromFile($i, $file);
                echo $list[$i]->username;
                echo $list[$i]->passwd;
                echo $list[$i]->atQuestion;
            }
            
            return $list;
        }
    } 
?>