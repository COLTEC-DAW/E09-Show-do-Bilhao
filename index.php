<html>
<head>
	<title>My first PHP script</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title"> Vai começar o Show do Milho Grande </h1>
    <br>
    <?php
        // include('menu.inc.php');

        require('quiz.inc.php');
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

        include('footer.inc.php');
    ?>
</body>
</html>

