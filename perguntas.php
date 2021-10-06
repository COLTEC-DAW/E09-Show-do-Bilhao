<?php 
$array1 = [
    1 => "bar",
    2 => "foo",
];

$array = array(
    0 =>"<p>Quem foi o navegador que chegou primeiro ao Brasil?<br>",
1=>"<p>Qual destes animais é conhecido pela habilidade de se camuflar?<br>", 
2=>"<p>Quem foi o campeão da Copa Libertadores do ano de 2013?<br>",
3=>"<p>Qual a organela celular responsável por transportar energia para as células?<br>",
4=>"<p>Qual destes renomados cientistas é considerado o pai da física quântica?<br>"
);

$arrayalt = array(
            array("(A) Pedro Álvares Cabral<br>", "(B) Cristovão Colombo<br>", "(C) Américo Vespúcio<br>", "(D) Jojo Toddynho<br>"),
            array("(A) Golfinho<br>", "(B) Cobra coral<br>",
                "(C) Lula<br>", "(D) Camaleão<br>"),
            array("(A) Cruzeiro<br>", "(B) Internacional de Porto Alegre<br>", "(C) Atlético Mineiro<br>", "(D) River Plate<p>"),
            array("(A) Ribossomos<br>", "(B) RNA<br>", "(C) Complexo de Golgi<br>", "(D) Mitocôndria<br>"),
            array("(A) Max Planck<br>", "(B) Stephen Hawking<br>", "(C) Albert Einstein<br>", 
            "(D) Ernest Rutherford</p>"));

$gabarito = array(
                0, 3, 2, 3, 0
            );
            
?>

<!DOCTYPE html>

<html>


    <head>
        <title>Abece</title>
        <meta charset="UTF-8">
        <meta http-equiv="X UA-Compatible" content="IE=edge">

    </head>

    <body>



        <p>
            
            <?php foreach ($array as $key => $value) {
                    echo("$value");
                    for($i = 0; $i < 4; $i++){
                        echo($arrayalt[$key][$i]);
                    }
                    
                } 
                echo("<p>Gabarito: </p>");
                $j = 1;
                foreach($gabarito as $key2 => $resposta){

                    echo("$j :");
                    echo($arrayalt[$key2][$resposta]);
                    $j++;
                }
            ?>
        </p>
    </body>

</html>