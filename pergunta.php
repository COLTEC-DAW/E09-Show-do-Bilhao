<?php require("class/questions.php");
require("class/user.php");

session_start();
if(!isset($_SESSION['user'])) header("Location: index.php");

$user = new User($_SESSION['user']);
$questID=0;

$quest = new Questions;
$question = $quest->getQuest($questID);
$options = $quest->getOption($questID);
$answer = $quest->getAnswer($questID);

if(isset($_GET['id'])) $questID = $_GET['id'];
if(isset($_POST['answer'])){
    $prevAnswer = $_POST['answer'];
    $prevOption = $_POST['option'];

    if($prevAnswer == $prevOption) $user->aumentaPontA();
    if($user->checaPont()==true) $user->aumentaPontM();
    if($prevAnswer != $prevOption){
        $user->__setLast();
        $user->zeraPont();
        header("Location: lost.php");
    }else if($questID == 5 && $prevAnswer == $prevOption){
        $user->__setLast();
        $user->zeraPont();
        header("Location: won.php");
    }
}

$quest = new Questions;
$question = $quest->getQuest($questID);
$options = $quest->getOption($questID);
$answer = $quest->getAnswer($questID); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Show do Pilão</title>
        <link rel="stylesheet" href="Style/style.css">
        <link rel="shortcut icon" href="gallery/berti.jpg" type="image/x-icon">
    </head>

    <body>
        <?php include("Partials/menu.inc");?><br>
        <?php include("Partials/pergunta.inc");?>
        <h2><a href="logout.php">Sair</a></h2>
        <?php if(isset($_COOKIE[$user->__getName()."last"])){ ?>
            <h4>Seu último login foi em: <?=$_COOKIE[$user->__getName()."last"]?></h4>
        <?php } ?>
        <?php if(isset($_COOKIE[$user->__getName()."pont"])){ ?>
            <h4>Sua última pontuação foi: <?=$_COOKIE[$user->__getName()."pont"]?></h4>
        <?php } ?>
        <?php include("Partials/rodape.inc");?>
    </body>
</html>
