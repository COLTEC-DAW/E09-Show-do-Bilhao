<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Perguntas</title>
    </head>
    <body>
        <ul>
            <?php
                $str = file_get_contents('../data/questoes.json');
                $values = json_decode($str, true);
                foreach ($values["perguntas"] as $val) {
                    echo "<li> $val </li>";
                }
            ?>
        </ul>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    </body>
</html>