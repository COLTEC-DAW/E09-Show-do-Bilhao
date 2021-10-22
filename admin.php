<?php
    include 'lib\header.inc';
    include 'lib\footer.inc';
    include 'lib\intro.inc';
    include 'models\question.php';

    session_start();

    $Questions = [];
    $questions_read = json_decode(file_get_contents('data\questions.json'), true);
    foreach($questions_read as $question){
        array_push($Questions, new \models\Question($question['header'], $question['options'], $question['answer']));
    }

    function showQuestions(){
        global $Questions;    
        $current_id = isset($_GET["question"]) ? $_GET["question"] : 1;
        $question = $Questions[$current_id - 1];
        $next = ($current_id < count($Questions)) ? $current_id + 1 : 0;
        return $question->exibitionFormat($current_id - 1, $next);    
    }
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Show do Bilhão</title>
</head>

<body>
    <?php echo getHeader() ?>
    <?php echo showQuestions() ?>
    <?php echo getFooter() ?>
</body>
</html>