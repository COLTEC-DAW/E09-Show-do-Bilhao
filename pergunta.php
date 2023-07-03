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
        $user->zeraPont();
        header("Location: lost.php");
        exit();
    }else if($questID == 5 && $prevAnswer == $prevOption){
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
            <input type="radio" name="option" value="0" id="">
            <label for="0"><?=$options[0]?></label><br>
            <input type="radio" name="option" value="1" id="">
            <label for="1"><?=$options[1]?></label><br>
            <input type="radio" name="option" value="2" id="">
            <label for="2"><?=$options[2]?></label><br>
            <input type="radio" name="option" value="3" id="">
            <label for="3"><?=$options[3]?></label><br>
            <input type="radio" name="option" value="4" id="">
            <label for="4"><?=$options[4]?></label><br>
            <input type="hidden" name="answer" value="<?=$answer?>">
            <input type="submit" value="Mandar">
        </form>

        <h2><a href="logout.php">Sair</a></h2>
        <?php include("Partials/rodape.inc");?>
    </body>
</html>
