<html>
<head>
	<title>My first PHP script</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Vai começar o Show do Milho </h1>
    <br>
    <?php
        require('data.inc.php');

        foreach($questions as $quest)
        {
            $quest->ShowQuestion();
        }
    ?>
</body>
</html>

