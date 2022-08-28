<?php 
    class UserModel {
        private $username;
        private $id;
        private $lastAccess;
        private $amountOfRightAnswers;

        public function __construct($username, $id, $lastAccess, $amountOfRightAnswers) {
            $this->username = $username;
            $this->id = id;
            $this->lastAccess = lastAccess;
            $this->amountOfRightAnswers = $amountOfRightAnswers;
        }
    }

?>