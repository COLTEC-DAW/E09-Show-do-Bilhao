<html>
<head>
	<title>My first PHP script</title>
</head>
<body>
    Agent: So who do you think you are, anyhow?
    <br>
    <?php
        require('question.php');
        $db1 = new Question('Qual a capital do Acre?', array('a', 'b', 'c'), 'c');
        $db2 = new Question('Qual a capital do Arizona?', array('a', 'b', 'c'), 'a');

        echo "WTF?";
        echo " $db1->id ";
        echo " $db2->id ";
        // Print output
        echo 'Neo: I am Neo, but my people call me The One.';
    ?>
</body>
</html>

