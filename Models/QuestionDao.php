<?php 
    require "dao.php";
    require "Question.php";

    class QuestionDao implements DAO {
        function read($obj){
            $perguntasJSON = json_decode(file_get_contents("Arquivos/perguntas.json"));
            $perguntas;
            foreach ($perguntasJSON as $perguntaJSON){
                $perguntas[] = new Question($perguntaJSON->enunciado, $perguntaJSON->resposta, $perguntaJSON->alternativas);
            }        
            return $perguntas;
        }

        function insert($obj){

        }
    }

?>