
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

        $perguntas = [
        "Normalmente, quantos litros de sangue uma pessoa tem? Em média, quantos são retirados numa doação de sangue?",
        "De quem é a famosa frase “Penso, logo existo”?",
        "Quais o menor e o maior país do mundo?",
        "Atualmente, quantos elementos químicos a tabela periódica possui?",
        "Quais os países que têm a maior e a menor expectativa de vida do mundo?: "
        ];

        $alternativas = [
        ["Tem entre 2 a 4 litros. São retirados 450 mililitros","Tem entre 4 a 6 litros. São retirados 450 mililitros","Tem 10 litros. São retirados 2 litros","Tem 7 litros. São retirados 1,5 litros"],
        ["Platão", "Galileu Galilei", "Descartes", "Sócrates"],
        ["Vaticano e Rússia", "Nauru e China", "Mônaco e Canadá", "Malta e Estados Unidos"],
        ["113", "109", "108", "118"],
        ["Japão e Serra Leoa", "Austrália e Afeganistão", "Itália e Chade", "Brasil e Congo"]
        ];

        $gabarito = [1,2,0,3,0];

        $menu = "menu.inc";
        $enunciados = "perguntas.inc";
        $rodape = "rodape.inc";
        
        if (is_readable($menu)) include $menu;
        if (is_readable($enunciados)) include $enunciados;

        if (isset($_GET["id"]) && (intval($_GET["id"]) >=0 && intval($_GET["id"]) < count($GLOBALS["perguntas"]))){

            carregaPergunta($_GET["id"], $perguntas, $alternativas);

        }else{

            echo "Esse ID é inválido";
        }

        if (is_readable($rodape)) include $rodape;
    
    ?>
    
</body>
</html>