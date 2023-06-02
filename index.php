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
        $id = 0;
        if($_POST['next_id'] != null)
        {
            $id = (int)$_POST['next_id'];
            LoadFromXML($id-1)->CheckQuestion($_POST['answer']);
        }

        $quest = LoadFromXML($id);
        if($quest != null)
            $quest->ShowQuestion();
        
        include('footer.inc.php');
    ?>
</body>
</html>

