<?php 
    session_start();

    include "questoesimprime.php";

    if( !isset($_GET["id"]) || $_GET["id"] == 0)
    {
        $id = 0 ;
        setcookie('nacertos' , 0);
    }else{
        $id = $_GET["id"];
    }

    if ($id != 5) {
    
    $perg = carregaPergunta($id);

    $pergunta = $perg->pergunta;
    $opcoes = $perg->opcoes;
    $resposta = $perg->resposta;
    
    }

    if (!isset($_COOKIE["nacertos"])) {
        setcookie('nacertos' , 0);
    }else{
        $nAcertos = $_COOKIE["nacertos"];
        if(isset($_POST['alt']) && confereResposta($id-1 , $_POST['alt'])){
            setcookie('nacertos' , $nAcertos + 1);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
</head>
<body>
<?php include "menu.inc"?>

<?php 

    include "perguntas.inc.php";
    
?>
<?php include "rodape.inc"?>    
</body>
</html>