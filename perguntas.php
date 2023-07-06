<?php
session_start();
?>
<!-- após a seção ser iniciada, confere se o usuario existe, se ele não existir vai para a página login.php e fecha esse esse script
<?php
if (!isset($_SESSION['usuario'])) {
   
    header("Location: login.php");
    exit();
}
?>

<?php
//não roda o codigo caso perguntas.inc não exista 
require 'perguntas.inc';

//verifica se o metodo de requisição e post (uma resposta foi enviada) se a pergunta so for carregada o metodo é o get  _Server é uma variavel global que funciona no servidor, ela pega coisas uteis como o metodo de requisição e outras informações como url 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // POST é uma variavel global que pega todas as requisições post, nesse ele pega as variaveis id e resposta
    $resposta = $_POST['resposta'];
    $id = $_POST['id'];
    $questaoAtual = $perguntas[$id]; //cria uma varia questão atual e coloca a questão armazenada na posição id
    if ($resposta === $questaoAtual->questaocerta) {
        $id = isset($_POST['id']) ? $_POST['id'] + 1 : $id + 1; //verifica se id existe (isset), se existir atualiza o id

        //se o id for menor que a quantidade de perguntas entra aqui e exibe a pergunta [id], se não ele exibe fim das perguntas
        if ($id <= count($perguntas)) {
            $pergunta_atual = $perguntas[$id];
        } else {
            $id = count($perguntas);
            header("location: venceu.php");
        }
    } else { //se a resposta ta errada 
        
        header("location: perdeu.php");
       
        exit; // Termina o script para evitar a exibição do restante da página
    }
    //se o metodo não for post imprime a questão incicial, por isso esse else
} else {
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
}

if ($id <= count($perguntas)) {
    $pergunta_atual = $perguntas[$id];
} else {
    $id = count($perguntas);
    $pergunta_atual = "Fim das perguntas.";
}
?>
<!-- inicia o html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo do bilhão</title>
</head>
<body>
    <!-- abre o php para imprimir a variavel id-->
    <h2> <?php echo " voce acertou ate agora ",$id-1," questões"?></h2>
    <h2><?php echo "Você está jogando como: " . $_SESSION['usuario']; ?></h2>
    <h1>Pergunta <?php echo $id; ?></h1>
    <!--imprime o enunciado-->
    <p><?php $pergunta_atual->enunciado($id); ?></p>

    <?php if ($id <= count($perguntas)): ?>
        <!-- define qual o metodo do formulario, e define para qual arquvio eles vão ser enviados php sel representa que vai ser no proórprio arquivo-->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- pega a pergunta e vai nas alternativas dela, criando uma resposta do formulario para cada colocando no value, a alternativa enviada vai ser o valor de resposta-->
           <!-- define o valor (input) e o texto associado (label)como o texto da questao-->
        <?php foreach ($pergunta_atual->questões as $questao): ?>
                <input type="radio" name="resposta" value="<?php echo $questao; ?>">
                <label><?php echo $questao; ?></label>
                <br>
            <?php endforeach; ?>

            <input type="submit" value="Enviar">
            <!--manda o id como escondido-->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </form>
        <a href="logout.php">Sair</a>

    <?php endif; ?>

    <?php include 'rodape.inc'; ?> 
</body>
</html>