<?php 
    class User {
        // Conecção com o banco de dados
        private $connection;
        // Tabela do banco de dados
        private $database_table = "User";
        // Dados do user
        public $id;
        public $name;
        public $email;
        public $username;
        public $password;

        public function __construct(){
            $this->connection = new Database();
        }

        public function getUsers(){
            $query = "SELECT * FROM " . $this->database_table;
            $result = $this->connection->select($query);
            return $result;
        }

        public function createUser(){
            $query = "INSERT INTO " . $this->database_table . " (name, email, username, password) VALUES (?, ?, ?, ?)";
            $params = ["ssss", $this->name, $this->email, $this->username, $this->password];
            $result = $this->connection->executeStatement($query, $params);
            return $result;
        }

        public function getUser(){
            $query = "SELECT * FROM " . $this->database_table . " WHERE id = ?";
            $params = ["i", $this->id];
            $result = $this->connection->select($query, $params);
            return $result;
        }        

        public function updateUser(){
            $query = "UPDATE " . $this->database_table . " SET name = ?, email = ?, username = ?, password = ? WHERE id = ?";
            $params = ["ssssi", $this->name, $this->email, $this->username, $this->password, $this->id];
            $result = $this->connection->executeStatement($query, $params);
            return $result;
        }

        function deleteUser(){
            $query = "DELETE FROM " . $this->database_table . " WHERE id = ?";
            $params = ["i", $this->id];
            $result = $this->connection->executeStatement($query, $params);
            return $result;
        }
    }
?>