<html>
<head>
	<title>My first PHP script</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Vai começar o Show do Milho Grande </h1>
    <br>
    <?php
        // include('menu.inc.php');
        
        require('quiz.inc.php');
        $id = (int)$_GET['id'];
        LoadFromXML($id)->ShowQuestion();
        
        include('footer.inc.php');
    ?>
</body>
</html>

