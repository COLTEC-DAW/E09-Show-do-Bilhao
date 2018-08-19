<?php

    class JsonDAO{
        private $file;
        private $str;
        private $json;

        function __construct($file){
            $this->file = $file;
            $this->str = file_get_contents($this->file);
            $this->json = json_decode($this->str, true);
        }

        function addUser($_user){
            foreach($this->json as $user){
                if(strcmp($user["username"], $_user->username) == 0 || strcmp($user["email"], $_user->email) == 0){
                    return false;
                }
            }
            array_push($this->json, $_user);
            file_put_contents($this->file, json_encode($this->json));
            return true;
        }

        function autenticaUser($_user){
            foreach($this->json as $user){
                if(strcmp($user["username"], $_user->username) == 0){
                    if(strcmp($user["senha"], $_user->senha)==0){
                        return true;
                    }
                }
            }
            return false;
        }

        function updateUserData($_user, $tag, $value){
            $index = 0;
            foreach($this->json as $user){
                if(strcmp($user["username"], $_user->username) == 0){
                    $this->json[$index][$tag] = $value;
                    file_put_contents($this->file, json_encode($this->json));
                    return true;
                }
                $index = $index + 1;
            }
            return false;
        }

        function getUser($username){
            foreach($this->json as $user){
                if(strcmp($user["username"], $username) == 0){
                    return $user;
                }
                return null;
            }
        }

        function getPergunta($index){
            return $this->json[$index];
        }
    }

?>