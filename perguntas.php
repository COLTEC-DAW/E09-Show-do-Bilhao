<!DOCTYPE html>
<?php 
    require "perguntas.inc";
    require "session.inc";
    
    if(isset($_GET["id"])) {
        $id = $_GET["id"];
    } else {
        $id = 0;
    }

    if(isset($_POST["login"])) {
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        validaLogin();
    } else {
        header("location: index.php");
    }
?>

<html lang="en">
<body>
    <?php include "menu.html"; ?>

    <div class="wrapper">
        <h1>Show do Bilhão</h1>
        <form action="perguntas.php?id=<?= $id+1 ?>" method="POST">
            <?php verificaResposta($id);?>
        </form>
    </div>
    
    <?php include "rodape.html";?>
</body>
</html>