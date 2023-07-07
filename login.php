<?php
session_start();

// Verifica se o usuário já existe, e se existir manda pra página de perguntas 
if (isset($_SESSION['usuario'])) {
    header("location: perguntas.php");
    exit();
}

// Função para verificar as credenciais do usuáriao, recebe o usuario e a senha digitados pelo jogador, e verficica pelo arquivo
function verificarCredenciais($usuario, $senha) {
    $usuarios = json_decode(file_get_contents('usuarios.json'), true)['usuarios'];//file get contents lê conteudo do arquvio, json_decode(...,true )decodifica uma função json em php, true indica que o resulta é um array e não um objeto [usuarios]indica que pegamos a chave usuarios do array, percorre um vetor só nela (usuarios ta antes dos atributos)
    foreach ($usuarios as $usuarioArmazenado) {
        if ($usuario === $usuarioArmazenado['usuario'] && $senha === $usuarioArmazenado['senha']) {
            return true; //deu certo 
        }
    }
    return false; 
}


//verifica se o metodo é post, e se existe um usuario e senha, se for true recolhe o valor de usuario e senha e armazena nas variaveis com o mesmo nome
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

   //se as credenciais forem válidas (true), inicia a sessão com  o nome do usuario e manda para perguntas.php, saindo do resto do código, cria uma sessao para armazenar a última pontuação
    if (verificarCredenciais($usuario, $senha)) {
        $_SESSION['usuario'] = $usuario; 
        header("location: perguntas.php");
        exit();
    } else {
        $erroLogin = true;  //seta a var de erro 
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <!-- se erroLogin for true -->
    <?php if (isset($erroLogin) && $erroLogin): ?>
        <p>Usuário ou senha incorretos.</p>
    <?php endif; ?>
    <!-- define um formulario, que vai ser post. sua ação (para onde é enviado), e um função que retorna o endereço do proprio arquivo, depois cria um label (descrição) para usuario e senha for representa a quem ele tá representado, que é o id do campo, type quer dizer o texto, name o nome (usado para o post) e id é para o label, required quer dizer que precisa preencher para enviar-->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br>
        <input type="submit" value="Entrar">
    </form>
    <p>Ainda não tem uma conta? <a href="criarConta.php">Criar nova conta</a></p>
    <p><a href="index.php">volte para a página inicial</a></p>
   
   
</body>
</html>


