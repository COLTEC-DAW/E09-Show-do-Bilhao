<?php
    session_start();
    require('quiz.inc.php');
    require('auth.inc.php');
    require('question.inc.php');

    include('menu.inc.php'); 
    include('footer.inc.php');
    CheckLogout();
    Question::$_atQuestion = $_SESSION['atQuestion'];
?>
    
<html>
<head>
	<title>My first PHP script</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title"> Show do Item Não Familiar </h1>
    <br>
    <?php
        $id = isset($_POST['next_id']) ? (int)$_POST['next_id'] : $_SESSION['atQuestion'];
        $_SESSION['atQuestion'] = $id;

        if($id == 0 or Question::LoadQuestion($id-1)->CheckQuestion())
        {
            if(isset($_POST['answer'])) unset($_POST['answer']);
            
            $quest = Question::LoadQuestion($id);
            if($quest != null)
            {
                $quest->ShowProgress();
                $quest->ShowQuestion();
            }
            else WinScreen();
        }
        else LoseScreen();
    ?>
</body>
</html>

