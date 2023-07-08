
<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" ient="IE=edge">
    <meta name="viewport" ient="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body>
    <h1>Show do Bilhao</h1>

    <div>

        <?php
       
        if (!isset($_SESSION['User'])) {
           header("Location: index.php");
        }
        
        require "perguntas.inc";
        
        if (empty($_GET)) {
            carregaPergunta($_GET['id'] = 0);
        }
        else {
            carregaPergunta($_GET['id']);
        }

        echo $_GET['id'];
        echo "<br>";

        $progresso = $_GET["id"];
        echo "Numero de acertos: $progresso";

        // $id = htmlspecialchars($_GET["id"]);
        //         $saldoAcertos = ($id);
        // setcookie('ultima_pontuacao', $saldoAcertos);
        // setcookie('ultima_acesso', date('d-m-Y H:i:s'));

        // echo "Numero de acertos: $saldoAcertos";

        // // $progresso = $_GET["id"];
        // // echo "Numero de acertos: $progresso";

        ?>
    </div>

    <?php include("rodape.inc");?>

</body>

</html>