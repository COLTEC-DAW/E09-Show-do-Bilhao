<?php


	class Questoes{
		
		var $enunciado;
		var $alternativas=array();
		var $resposta;

		function __construct($enunciado,$alternativas,$resposta){
			$this->enunciado = $enunciado;
			$this->alternativas = $alternativas;
			$this->resposta = $resposta;	
		}

	}


?>