<?php
    include 'lib\header.inc';
    include 'lib\footer.inc';
    include 'lib\result.inc';
    include 'models\question.php';
    include 'models\game.php';
    
    session_start();

    if(isset($_GET["restartSession"])){
        unset($_SESSION['Game']);
    }

    $Questions = [];
    $questions_read = json_decode(file_get_contents('data\questions.json'), true);
    foreach($questions_read as $question){
        array_push($Questions, new \models\Question($question['header'], $question['options'], $question['answer']));
    }

    function getQuestion($id){
        global $Questions;
        $quest = $Questions[$id - 1];
        return $quest->formFormat($_SESSION['Game']->getRequest());
    }

    function updateProgressBar(){
        $percent = round(($_SESSION['Game']->getPoints() / $_SESSION['Game']->quantity_ID) * 100);
        $format = '<div class="progress">
            <div id="progress-bar" data-attr="' . $percent . '%"></div>
        </div>';
        return $format;
    }

    function showDoBilhao(){
        global $Questions;

        if(!isset($_SESSION['Game'])){
            $_SESSION['Game'] = new \models\Game(count($Questions));   
        }
        
        if($_SESSION['Game']->currently_playing){
            
            if($Questions[$_SESSION['Game']->getPastQuestionID() - 1]->verifyAnswer($_POST["option"])){
                $_SESSION['Game']->updatePoints();
            }   
            
            if($_SESSION['Game']->getCount() == $_SESSION['Game']->quantity_ID){
                if($_SESSION['Game']->getPoints() == $_SESSION['Game']->quantity_ID){
                    echo onWin();
                    return true;
                }else{
                    echo onLose();
                    return false;
                }
            }
        }
        else
        {
            $_SESSION['Game']->currently_playing = true;
        }

        $_SESSION['Game']->updateCount();
        echo getQuestion($_GET["question"]);
        return updateProgressBar();
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
    <script src="app.js"></script>
    <title>Show do Bilhão</title>
</head>

<body>
    
    <?php echo getHeader() ?>
    <?php       
        /*if(!isset($_SESSION['Player'])){
            echo showLogin();
        }
        else{
            echo showDoBilhao();
        }*/
    
        echo showDoBilhao();
       
    ?>
    
    <?php echo getFooter() ?>
</body>
</html>