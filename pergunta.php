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
        exit();
    }else if($questID == 5 && $prevAnswer == $prevOption){
        $user->__setLast();
        $user->zeraPont();
        header("Location: won.php");
        exit();
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
    </head>

    <body>
        <?php include("Partials/menu.inc");?><br>
        <h2><?=$question?></h2>
        <form action="pergunta.php?id=<?=$questID+1?>" method="POST">
        <?php for($i = 0; $i < 5; $i++){ ?>
            <input type="radio" name="option" value="<?=$i?>" id="">
            <label for="<?=$i?>"><?=$options[$i]?></label><br>
        <?php } ?>
            <input type="hidden" name="answer" value="<?=$answer?>">
            <input type="submit" value="Mandar">
        </form>

        <h2><a href="logout.php">Sair</a></h2>
        <?php if(isset($_COOKIE[$user->__getName()."last"])){
            echo "<h4>Seu último login foi em: ".$_COOKIE[$user->__getName()."last"]."</h4>";
        }
        if(isset($_COOKIE[$user->__getName()."pont"])){
            echo "<h4>Sua última pontuação foi: ".$_COOKIE[$user->__getName()."pont"]."</h4>";
        }?>
        <?php include("Partials/rodape.inc");?>
    </body>
</html>
