<html>
<head>
	<title>My first PHP script</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Vai começar o Show do Milho Grande </h1>
    <br>
    <?php
        require('quiz.inc');
        $id = $_GET['id'];
        
        loadQuestion($id)->ShowQuestion();
    ?>
</body>
</html>

