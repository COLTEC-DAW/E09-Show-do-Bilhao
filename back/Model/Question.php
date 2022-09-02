<?php
    class Question{
        // Conecção com o banco de dados
         private $connection;
        // Tabela do banco de dados
        private $database_table = "Question";
        // Dados da questão
        public $id;
        public $statement;
        public $alternatives;
        public $answer;

        public function __construct(){
            $this->connection = new Database();
        }

        public function getQuestions(){
            $query = "SELECT * FROM " . $this->database_table;
            $result = $this->connection->select($query);
            return $result;
        }

        public function createQuestion(){
            $query = "INSERT INTO " . $this->database_table . " (statement, alternatives, answer) VALUES (?, ?, ?)";
            $params = ["sss", $this->statement, $this->alternatives, $this->answer];
            $result = $this->connection->executeStatement($query, $params);
            return $result;
        }

        public function getQuestion(){
            $query = "SELECT * FROM " . $this->database_table . " WHERE id = ?";
            $params = ["i", $this->id];
            $result = $this->connection->select($query, $params);
            return $result;
        }        

        public function updateQuestion(){
            $query = "UPDATE " . $this->database_table . " SET statement = ?, alternatives = ?, answer = ? WHERE id = ?";
            $params = ["sssi", $this->statement, $this->alternatives, $this->answer, $this->id];
            $result = $this->connection->executeStatement($query, $params);
            return $result;
        }

        function deleteQuestion(){
            $query = "DELETE FROM " . $this->database_table . " WHERE id = ?";
            $params = ["i", $this->id];
            $result = $this->connection->executeStatement($query, $params);
            return $result;
        }
    }
?>