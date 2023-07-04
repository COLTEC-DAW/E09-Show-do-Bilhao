<div class='form'>
    <h2> CADASTRO </h2>
    <form action='index.php?' method='POST'>
    <div class='login'>
        <label> <input type='text' name='nome'> Insira seu nome </label>
    </div>
    <div class='login'>
        <label> <input type='text' name='email'> Insira seu email </label>
    </div>
    <div class='login'>
        <label> <input type='text' name='login'> Insira seu login </label>
    </div>
    <div class='login'>
        <label> <input type='text' name='senha'> Insira sua senha </label>
    </div>
    <input class='pergunta' type='submit' name='resp'>
</div>

<?php 
    class Usuario{
        var $nome;
        var $email;
        var $login;
        var $senha;

        function __construct($nome, $email, $login, $senha){
        $this->nome= $nome;
        $this->email= $email;
        $this->login= $login;
        $this->senha= $senha;
        }
    }
    
    function cadastroUsuario($nome, $email, $login, $senha){
        $arquivo = fopen("./json/usuarios.json", "a");
        $usuario = new Usuario($nome,$email,$login,$senha);
        $info=json_encode($usuario);
        fwrite($arquivo, $info);
        fclose($arquivo);
    }
   
?>