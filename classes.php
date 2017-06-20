<?php
	class User {
		var $nome;
		var $email;
		var $login;
		var $senha;
		
		function __construct($n, $e, $l, $s) {
			$this->nome = $n;
			$this->email = $e;
			$this->login = $l;
			$this->senha = $s;
		}
	}
	
	class Question {
		var $enunciado;
		var $alternativas;
		var $resposta;
		
		function __construct($enunciado, $alternativas, $resposta) {
			$this->enunciado = $enunciado;
			$this->alternativas = $alternativas;
			$this->resposta = $resposta;
		}
	}
?>