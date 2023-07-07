<?php
session_start(); // Inicia a sessão

class Jogador 
{
    public string $login;
    public string $senha;

    public function __construct($login, $senha){
        $this->login = $login;
        $this->senha = $senha;
    }
    
}

$_SESSION['pontuacao'] = 0;

$enunciados = [
    "Qual é a capital do Brasil?",
    "Quem escreveu o livro 'Dom Quixote'?",
    "Qual é o maior planeta do Sistema Solar?",
    "Qual é o animal terrestre mais rápido do mundo?",
    "Quantos continentes existem no mundo?"
];

// Função para verificar se o jogador está autenticado
function isAutenticado() {
    return isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === true && isset($_SESSION['usuario']);
}

// Função para realizar o logout
function logout() {
    unset($_SESSION['autenticado']);
    unset($_SESSION['usuario']);
    unset($_COOKIE['ultima_pontuacao']);
    setcookie('ultima_pontuacao', '', time() - 3600);
    session_destroy();

    // Redireciona de volta para o arquivo "index.php"
    header("Location: index.php");
    exit();
}

// Verifica se o jogador está autenticado
if (!isAutenticado()) {
    // Verifica se o formulário de cadastro foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastro_nome']) && isset($_POST['cadastro_senha'])) {
        $nome = $_POST['cadastro_nome'];
        $senha = $_POST['cadastro_senha'];

        $arquivo = fopen('usuarios.json', "r+");
        $usuarios = [];
        $existe = false;

        if(filesize("usuarios.json") > 0){
            $usuarios =  json_decode(fread($arquivo, filesize("usuarios.json")));
            foreach ($usuarios as $usuario) {
                if ($usuario->login === $nome) {
                    echo "O nome de usuário já está em uso.";
                    $existe = true;
                    break;
                }
            }
        }

        if(!$existe){
            $novoUsuario = new Jogador($nome, $senha);
            array_push($usuarios, $novoUsuario);
            fseek($arquivo, 0, SEEK_SET);
            fwrite($arquivo, json_encode($usuarios));
            $_SESSION['autenticado'] = true;
            $_SESSION['usuario'] = serialize($novoUsuario);
            header("Location: index.php");
        }else{
            echo "Usuario existe";
        }

        exit();
    }

    // Verifica se o formulário de login foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_nome']) && isset($_POST['login_senha'])) {
        $nome = $_POST['login_nome'];
        $senha = $_POST['login_senha'];

        $arquivo = fopen("usuarios.json", "r");
        $usuarios = json_decode(fread($arquivo, filesize("usuarios.json")));

        // Verifica se as credenciais são válidas
        foreach ($usuarios as $usuario) {
            if ($usuario->login === $nome && $usuario->senha === $senha) {
                // Autentica o jogador
                $_SESSION['autenticado'] = true;
                $_SESSION['usuario'] = serialize($usuario);

                break;
            }
        }

        // Exibe mensagem de erro de autenticação
        echo "Nome de usuário ou senha inválidos.";
    }

    // Exibe o formulário de cadastro
    echo "
    <h1>Show do Bilhão</h1>
    <h2>Cadastro</h2>
    <form method='post' action='index.php'>
        <input type='text' name='cadastro_nome' placeholder='Nome de usuário' required>
        <input type='password' name='cadastro_senha' placeholder='Senha' required>
        <input type='submit' value='Cadastrar'>
    </form>
    ";

    // Exibe o formulário de login
    echo "
    <h2>Login</h2>
    <form method='post' action='index.php'>
        <input type='text' name='login_nome' placeholder='Nome de usuário' required>
        <input type='password' name='login_senha' placeholder='Senha' required>
        <input type='submit' value='Entrar'>
    </form>
    ";

    // Encerra a execução do script
    return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CSS-->
  <link rel="stylesheet" href="index.css"/>

    <title>Show do Bilhão</title>
</head>
<body>
    <?php include 'menu.inc'; ?>

    <div class="container">
        <?php
            $player = unserialize($_SESSION['usuario']);
            echo "<h1>Show do Bilhão Bíblico</h1>";
            echo "<p>Bem-vindo, " . $player->login . "!</p>";
            echo "<p>Última pontuação: " . $_COOKIE[$player->login . '-ultima_pontuacao'] . "</p>";
            echo "<p>Última vez que jogou: " . $_COOKIE[$player->login . '-ultima_vez_jogou'] . "</p>";
            echo "<h2>Perguntas</h2>";
            echo "<ul>";
        for ($i = 0; $i < count($enunciados); $i++) {
            echo "<li><a href='perguntas.php?id=" . $i . "'>Pergunta " . ($i + 1) . "</a></li>";
        }
        echo "</ul>";
        echo "<a href='logout.php'>Sair</a>";
        ?>
    </div>

    <?php include 'rodape.inc'; ?>
</body>
</html>