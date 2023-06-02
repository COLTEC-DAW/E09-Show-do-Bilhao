<html>
<head>
	<title>My first PHP script</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Vai começar o Show do Milho Grande </h1>
    <br>
    <?php
        include('menu.inc');
        
        require('quiz.inc');
        loadQuestion($_GET['id'])->ShowQuestion();
        
        include('footer.inc');
    ?>
</body>
</html>

