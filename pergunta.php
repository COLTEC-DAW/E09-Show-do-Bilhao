<?php require("perguntas.class.php");
 require("register.class.php");
  $question_id = 0;


$question = new Questions;
$pergunta = $question->load_question($question_id);
$alternativas = $question->load_option($question_id);
$resposta = $question->load_answer($question_id);

if (isset($_GET["id"])) {
    $question_id = $_GET["id"];
}

if (isset($_POST["answer"])) {
    $previous_answer = $_POST["answer"];
    $previous_option_selected = $_POST["option"];
}

if ($previous_answer != $previous_option_selected) {
    header("Location: GameOver.php");
    exit();
}
if ($question_id == 4 && $previous_answer == $previous_option_selected) {
    header("Location: Ganhou.php");
    exit();
}


$question = new Questions;
$pergunta = $question->load_question($question_id);
$alternativas = $question->load_option($question_id);
$resposta = $question->load_answer($question_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
   <title>Log in form</title>
</head>
<body>
<h2><?= $pergunta ?></h2> 
<form action="pergunta.php?id=<?= $question_id + 1 ?>" method="post">
        <input type="radio" name="option" value="0" id="">
        <label for="0"><?= $alternativas[0] ?></label> <br>
        <input type="radio" name="option" value="1" id="">
        <label for="1"><?= $alternativas[1] ?></label> <br>
        <input type="radio" name="option" value="2" id="">
        <label for="2"><?= $alternativas[2] ?></label> <br>
        <input type="radio" name="option" value="3" id="">
        <label for="3"><?= $alternativas[3] ?></label> <br>
        <input type="hidden" name="answer" value="<?= $resposta ?>">
        <input type="submit" value="Enviar">
    </form>
   
</body>
</html>