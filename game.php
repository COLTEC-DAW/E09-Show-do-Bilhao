<?php
    session_start();
    require('auth.inc.php');
    require('question.inc.php');
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }

    $loggedIn = true;
    $atMenu = false;
    include('menu.inc.php'); 
    include('footer.inc.php');
    CheckLogout();
    Question::$_atQuestion = (int)$_SESSION['atQuestion'];

    function WinScreen()
    {
        echo '<div class="box">';
        echo '<h1>Vitória!</h1>';
        echo '</div>';
    }
    function LoseScreen()
    {
        echo '<div class="box">';
        echo '<h1>Perdeste</h1>';
        echo '</div>';
    }
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
        $id = isset($_POST['next_id']) ? (int)$_POST['next_id'] : Question::$_atQuestion;
        $_SESSION['atQuestion'] = $id;

        if(($id == 0) or Question::LoadQuestion($id-1)->CheckQuestion())
        {
            if(isset($_POST['answer'])) unset($_POST['answer']);
            
            $quest = Question::LoadQuestion($id);
            if($quest != null)
            {
                $quest->ShowProgress();
                $quest->ShowQuestion();
            }
            else if($id > Question::$_atQuestion)
                WinScreen();
        }
        else LoseScreen();
    ?>
</body>
</html>

