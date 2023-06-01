<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php
        $id = $_GET['id'];
        include("perguntas.php");

        if($_COOKIE["login"] == NULL){
            header("Location: /login.html");
        }

        if($id == NULL){
            header("Location: /?id=0");
        }elseif($id > 6){
            
        }
        else{
            echo "A ultima vez que você jogou foi ". $_COOKIE["time"];
            echo "  e sua pontuação foi " . $_COOKIE["last"];
            $out = carregarPergunta($id);
            $resp = $out[1];
            echo "<h1>$out[0]</h1>";
            echo "<ui>";
            for($i = 0; $i < count($resp); $i++){
                echo "<li><a href='/points.php?id=" .$id ."&op=" . $resp[$i] ."'>
                $resp[$i] </a></li>";
            }
            echo "</ui>";
        }

    ?>
</body>
</html>