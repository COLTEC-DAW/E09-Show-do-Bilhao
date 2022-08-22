<?php 
    class User {
        private $username;
        private $passwordHash;
        private $id;
        private $lastAccess;
        private $amountOfRightAnswers;

        public function __construct($username, $passwordHash, $id, $lastAccess, $amountOfRightAnswers) {
            $this->username = $username;
            $this->passwordHash = $passwordHash;
            $this->id = id;
            $this->lastAccess = lastAccess;
            $this->amountOfRightAnswers = $amountOfRightAnswers;
        }
    }

?>