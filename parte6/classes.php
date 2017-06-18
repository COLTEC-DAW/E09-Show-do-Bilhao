<?php
class User{
		var $nome;
		var $email;
		var $login;
		var $senha;
		
		function __construct($nome, $email, $login, $senha){
			$this->Nome = $nome;
			$this->Email = $email;
			$this->Login = $login;
			$this->Senha = $senha;
		}
	}
	class Question{
		var $enunciado;
		var $alternativas;
		var $resposta;
		
		function __construct($enunciado, $alternativas, $resposta){
			$this->enunciado = $enunciado;
			$this->alternativas = $alternativas;
			$this->resposta = $resposta;
		}
	}
?> 