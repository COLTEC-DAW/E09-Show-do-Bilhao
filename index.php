<?php
/* para funcionar tem executar o PHP
como root, por causa do mysql */
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css">
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
            if($_COOKIE["last"] != NULL){
                echo "A ultima vez que você jogou foi ". $_COOKIE["time"];
                echo "  e sua pontuação foi " . $_COOKIE["last"];
            }
            $out = carregarPergunta($id);
            $resp = $out[1];
            echo '<div class="box">';
            echo "<h1>$out[0]</h1>";
            echo '<form action="/points.php/?id=' .$id .'" method="POST">';
        }
?>
            <ul>
                <?php
                    for($i = 0; $i < count($resp); $i++){
                        echo '<input type="radio" id=", '. $resp[$i]. '" name="options" value="'.  $resp[$i] .'"><label for="' . $resp[$$i] .'">'.$resp[$i] .'</label><br>';
                    }
                ?>
            </ul>
            <input type="submit" value="responder">
        </form>
        <button>
            <a href="/logout.php">Logout</a>
        </button>
        </div>
    </body>
</html>
