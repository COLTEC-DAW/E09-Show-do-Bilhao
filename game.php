<?php
    require('quiz.inc.php');
    session_start();
    if(ValidateLogIn() == false)
    {
        header("index.php");
        exit();
    }
    else
    {
            $id = isset($_POST['next_id']) ? (int)$_POST['next_id'] : 0;
    
            if($id == 0 or LoadFromXML($id-1)->CheckQuestion($_POST['answer']))
            {
                $quest = LoadFromXML($id);
                if($quest != null)
                {
                    $quest->ShowProgress();
                    $quest->ShowQuestion();
                }
                else WinScreen();
            }
            else 
            {
                LoseScreen();
            }
            // include('menu.inc.php'); 
            include('footer.inc.php');
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
</body>
</html>

