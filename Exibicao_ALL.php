<?php 
    // Importe de classes
    require "Models\\Question.php";
    require "Models\\User.php";

    // Importe de funcionalidades
    include "Lib\\Data.inc";
    include "Lib\\Menu.inc"; 
    include "Lib\\rodape.inc";

    // Inicialização da sessão
    session_start();

    if(!isset($_SESSION['PlayerData'])){
        echo "Você precisa estar logado para acessar todas as perguntas. </br>";
        echo "Primeiro acesso? <a href='cadastro.php'>Crie uma conta</a> com o nome de usuário admin! </br>";
        $GLOBALS["Validate"] = false;
    }else if($_SESSION['PlayerData']->UserName != "admin"){
        echo "Você precisa estar logado como adminstrador para acessar todas as perguntas. </br>";
        echo "Primeiro acesso? <a href='cadastro.php'>Crie uma conta</a> com o nome de usuário admin! </br>";
        $GLOBALS["Validate"] = false;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quests</title>

    <!-- Estilo do jogo -->
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Parte superior -->
    <?php echo GetMenu() ?>

    <!-- Perguntas -->
    <div class="container"> 
        <div class="Qcard col-12" id="ContainerTitle"> Questões disponíveis no sistema: </div>
<?php echo ShowAllQuests() ?>
    </div>
    
    <!-- Parte inferior -->
    <?php echo GetFooter() ?>
</body>
</html>