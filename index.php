<?php
include "questoes.php";
date_default_timezone_set('America/Sao_Paulo');

$id = $_POST["id"];

session_start();



if($id == 0){
    $login = $_POST["login"];
    if (!isset($_SESSION['loginSession'])) {
        $_SESSION['loginSession'] = $login;
      } else {
        session_destroy();
      }

    if ($login == ""){
        header("Location: paginaInicial.php");
    }

    setcookie("login", $login);
    $date = date('Y-m-d H:i:s');
    setcookie("date", $date);


}
if($id != 0){
    $login = $_COOKIE['login'];
    $date = $_COOKIE['date'];
}




echo 'Login: '. $login ."<br>";
echo 'Última Vez Jogada:   '. $date ."<br>";
echo 'Login Da Session: '. $_SESSION['loginSession'] ."<br>";


if ($id == 5){
    header("Location: ganhou.html");

}

echo "<h3> ID:"  .$id. "</h3>"; 
$alternativaClicada = $_POST["radioResposta"];

function TestaSeAcertou(){
    global $id; 
    global $alternativaClicada;
    global $vetorAlternativasCorretas;
    $idMenosUm = $id-1;
    
    if($alternativaClicada == $vetorAlternativasCorretas[$idMenosUm]){
        
    }
    else{
        header("Location: faliu.html");

    }

}

if (!($alternativaClicada == -1)){ //Testa se é a primeira página
    TestaSeAcertou();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Show do Ericao</title>
</head>

<body>
    <form action="paginaInicial.php" method="post">
    <button class="btn btn-info  position-absolute top-0 end-0 botaoLogout col-4" name="logout" value="1">Logout</button>

    </form>




    <?php


    function GeraButoesDasAlternativas($vetorDasAlternativas, $id)
    {

        echo '<form action="index.php"  method="post">';
        for ($indiceAlternativaAtual = 0; $indiceAlternativaAtual < 4; $indiceAlternativaAtual++) {
            echo '<input type="radio" name="radioResposta" value=',$indiceAlternativaAtual,'>';
            echo ($vetorDasAlternativas[$id][$indiceAlternativaAtual]);
            echo "<br>";
        }
        echo '<input type="submit" class="btn btn-primary" value="Enviar"  name="botaoRadioResposta">';

        echo '<input type="hidden" value=',$id + 1,' name="id">';


        echo "</form>";
    };
    function GeraTituloPergunta($id)
    {

        global $vetorEnunciados;
        echo ($vetorEnunciados[$id]);
        echo "<br>";
        echo "<br>";
    }
    function GeraPerguntasRespondidas($id){
        echo "<h3> Perguntas respondidas:"  .$id. "</h3>"; 
        echo "<br>";
        echo "<br>";
    }

    GeraTituloPergunta($id);
    GeraPerguntasRespondidas($id);
    GeraButoesDasAlternativas($vetorAlternativas, $id);

    ?>


    <br>





</body>
</html>