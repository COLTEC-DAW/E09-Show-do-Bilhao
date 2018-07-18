<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Show do Bilhão</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <div id="questao1">
            <form action="index.php" method="POST">
                1 - Qual o maior país do mundo?<br>
                <input type="radio" name="q1" value="Rússia">Rússia<br>
                <input type="radio" name="q1" value="Brasil">Brasil<br>
                <input type="radio" name="q1" value="China">China<br>
                <input type="radio" name="q1" value="Canadá">Canadá<br>
                <input type="submit" value="Enviar">
            </form>
        </div>

        <div id="questao2" style="display: none">
            <form action="index.php" method="POST">
                2 - Qual o planeta pertencemos?<br>
                <input type="radio" name="q2" value="Marte">Marte<br>
                <input type="radio" name="q2" value="Urano">Urano<br>
                <input type="radio" name="q2" value="Vênus">Vênus<br>
                <input type="radio" name="q2" value="Terra">Terra<br>
                <input type="submit" value="Enviar">
            </form>
        </div>

        <div id="questao3" style="display: none">
            <form action="index.php" method="POST">
                3 - Onde foi a copa do mundo de 2010?<br>
                <input type="radio" name="q3" value="Rússia">Rússia<br>
                <input type="radio" name="q3" value="Brasil">Brasil<br>
                <input type="radio" name="q3" value="China">China<br>
                <input type="radio" name="q3" value="África do Sul">África do Sul<br>
                <input type="submit" value="Enviar">
            </form>
        </div>

        <div id="questao4" style="display: none">
            <form action="index.php" method="POST">
                4 - Onde foi a copa do mundo de 2006?<br>
                <input type="radio" name="q4" value="Rússia">Rússia<br>
                <input type="radio" name="q4" value="Brasil">Brasil<br>
                <input type="radio" name="q4" value="Alemanha">Alemanha<br>
                <input type="radio" name="q4" value="Canadá">Canadá<br>
                <input type="submit" value="Enviar">
            </form>
        </div>

        <div id="questao5" style="display: none">
            <form action="index.php" method="POST">
                5 - A letra D é a correta!?<br>
                <input type="radio" name="q5" value="A">A<br>
                <input type="radio" name="q5" value="B">B<br>
                <input type="radio" name="q5" value="C">C<br>
                <input type="radio" name="q5" value="D">D<br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>

<?php
    // Pega a resposta da questao 1
    $respostaQ1 = isset( $_POST['q1']) ? $_POST['q1'] : "";
    $respostaQ2 = isset( $_POST['q2']) ? $_POST['q2'] : "";
    $respostaQ3 = isset( $_POST['q3']) ? $_POST['q3'] : "";
    $respostaQ4 = isset( $_POST['q4']) ? $_POST['q4'] : "";
    $respostaQ5 = isset( $_POST['q5']) ? $_POST['q5'] : "";
    
    // Verifica a q1
    if($respostaQ1 == "Rússia"){
        //Chamar funcao js que mostra proxima pergunta
        echo "<script> verifica1(); </script>";
    }

    // Verifica a q2
    if($respostaQ2 == "Terra"){
        //Chamar funcao js que mostra proxima pergunta
        echo "<script> verifica2(); </script>";
    }

    // Verifica a q3
    if($respostaQ3 == "África do Sul"){
        //Chamar funcao js que mostra proxima pergunta
        echo "<script> verifica3(); </script>";
    }

    // Verifica a q4
    if($respostaQ4 == "Alemanha"){
        //Chamar funcao js que mostra proxima pergunta
        echo "<script> verifica4(); </script>";
    }

    // Verifica a q5
    if($respostaQ5 == "D"){
        echo "Parabéns, agora você é um Bilionário!!<br>";
        //Botao jogar novamente
        echo "<a href=\"index.php\">Clique aqui para jogar novamente<a/><br>";
        //Chamar funcao js que mostra proxima pergunta
        echo "<script> verifica5(); </script>";
    }
?>