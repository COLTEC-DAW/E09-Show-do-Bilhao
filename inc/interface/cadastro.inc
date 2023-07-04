<div class='form'>
    <h2> CADASTRO </h2>
    <form action='index.php?id=0' method='POST'>
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

    <p>Último jogo: <?php echo $_COOKIE["ultimo-jogo"]; ?></p>
    <p>Última pontuação: <?php echo $_COOKIE["ultPontuacao"]; ?></p>
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
        $usuariosCadastrados = file_get_contents("usuarios.json");
        $usuario = new Usuario($nome,$email,$login,$senha);
        $usuarioJson = json_encode($usuario);
    }

    cadastroUsuario($_POST["nome"],$_POST["email"],$_POST["login"],$_POST["senha"]);

   
?>