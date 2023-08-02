<?php include 'init.inc'; ?>
<?php include 'menu.inc'; ?>

<?php

//  EXEMPLO

$usuario    = new Gerenciador_de_Usuario();
$usuarios   = fopen('users.json', 'r');
$user_name  = $_POST['user'];
$senha      = $_POST['passwd'];

if($usuarios != null)
{
    while(!$_SESSION['autenticado'])
    {
        $usuario->setFromJSON(fgets($usuarios));
        
        if(feof($usuarios))
            break;

        if($user_name == $usuario->obter_login() && $usuario->senha_correta($senha))
        {
            $_SESSION['autenticado']    = true;
            $_SESSION['user']           = $usuario;
            echo "Login realizado com sucesso!<br>\n";
            echo "Seja bem-vindo " . $usuario->obter_nome() . "!<br>\n";
        
            if(isset($_COOKIE['tempo_ultimo_login_' . $_SESSION['user']->obter_login()]))
                echo "Você jogou pela ultima vez em " . $_COOKIE['tempo_ultimo_login_' . $_SESSION['user']->obter_login()] . "<br>\n";
        }
    }
}

fclose($usuarios);

if(!$_SESSION['autenticado'])
    echo "Falha na autenticacao! Tente novamente.<br>\n";    

?>

<?php include 'rodape.inc'; ?>
