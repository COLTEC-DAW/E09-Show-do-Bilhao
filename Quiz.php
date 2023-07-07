<?php
    include ("Pergunta/perguntas.inc");
    require "Usuario/Usuario.php";

    session_start();

    //Define o id da pergunta atual
    $id = $_GET['id'] - 1;

    $user = new Usuario($_SESSION['logado']['login'],$_SESSION['logado']['senha'],$_SESSION['logado']['nome'],$_SESSION['logado']['email']);

    //Se id = numPerguntas, vitória!
    $numPerguntas = count(json_decode(file_get_contents("Pergunta/Perguntas.json")));
    if($numPerguntas == $id){
        $user->setRecorde($id);
        header("Location: Vitoria.php");
    }


    if (isset($_POST['alternativa']) && isset($_POST['resposta'])) {
        $resposta = $_POST['resposta'];
        $escolha = $_POST['alternativa'];
        //Se a alternativa marcada for diferente da alternativa certa:
        if($escolha != $resposta){
            $user->setRecorde($id - 1);
            //a pessoa perde :(
            header("Location: Derrota.php");
        }
    }
    
    $questao = CarregaPergunta($id,"Pergunta/Perguntas.json");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Jogo do Bilhão</title>
</head>
<body>
<?php include("menu.inc"); ?>
<h1>Show do Bilhão</h1>

<h2><?= $questao->enunciado ?></h2>


    <form action="Quiz.php?id=<?= $_GET['id']+1?>" method="post">
                <input hidden name="resposta" value=<?=$questao->resposta?>>
                <?php
                for ($i=1; $i <= sizeof($questao->alternativas); $i++) {
                    echo "<input type='radio' name='alternativa' value='{$i}' required>
                    <label for='{$i}'>{$questao->alternativas[$i-1]}</label>";
                    echo "<br>";
                }
                echo "<br>";
                ?>
                <input type="submit" value="Confirmar">
    </form>

</body>
</html>