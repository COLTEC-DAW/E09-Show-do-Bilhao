<?php 
    $enunciados = array(
        0 => "Enunciado1",
        1 => "Enunciado2",
        2 => "Enunciado3",
        3 => "Enunciado4",
        4 => "Enunciado5"
    );

    $alternativas = array(
        "Enunciado1" => array (
            0 => "Alternativa1",
            1 => "Alternativa2",
            2 => "Alternativa3",
            3 => "Alternativa4"
        ),
        "Enunciado2" => array (
            0 => "Alternativa1",
            1 => "Alternativa2",
            2 => "Alternativa3",
            3 => "Alternativa4"
        ),
        "Enunciado3" => array (
            0 => "Alternativa1",
            1 => "Alternativa2",
            2 => "Alternativa3",
            3 => "Alternativa4"
        ),
        "Enunciado4" => array (
            0 => "Alternativa1",
            1 => "Alternativa2",
            2 => "Alternativa3",
            3 => "Alternativa4"
        ),
        "Enunciado5" => array (
            0 => "Alternativa1",
            1 => "Alternativa2",
            2 => "Alternativa3",
            3 => "Alternativa4"
        ),
    );

    $alternativaCorreta = array (
        0 => 1,
        1 => 1,
        2 => 1,
        3 => 1,
        4 => 1,
    );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.2/dist/semantic.min.css">
    <title>Show do bilhão</title>
</head>
<body>
    <div class="ui grid">
        <div class="three wide column"></div>
        <div class="ten wide column">
            <div class="left floated left aligned">
                <div class="ui segment">
                    <?php 
                        foreach($enunciados as $index => $enunciado) {
                        
                            echo "<div class = 'ui medium header'>" . "$enunciado" . "</div>";
                            foreach ($alternativas[$enunciado] as $alternativa) {
                                echo "<input type='radio' name='$enunciado'>" . $alternativa . "</input> </br>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="three wide column"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.2/dist/semantic.min.js"></script>
</body>
</html>