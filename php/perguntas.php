<!DOCTYPE html>
<?php require "./models/Question.php" ?>

<?php
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        $id = 0;
    }
   
    $question = Question::carregaPergunta($id);
    $alternativas = $question->getAlternativas();

    if (isset($_POST['alternativa'])) {
        $resp = $_POST['alternativa'];
        $question = Question::carregaPergunta($id-1);
        Question::checandoResposta($id, $resp, $question);
    }  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.2/dist/semantic.min.css">
    <link rel="stylesheet" href="../index.css">
    <title>Show do bilhão</title>
</head>
<body>
    <div class="container">
        <?php include '../components/menu.inc'; 
        ?>

        <div class="ui grid">
            <div class="three wide column"></div>
            <div class="ten wide column">
                <div class="left floated left aligned">
                    <div class="ui segment">
                        <div class="ui teal progress active" id="example4">
                            <div class="bar" style="width: <?= $id*20 ?>%">
                                <div class="progress"></div>
                            </div>  
                            <div class="label">Questionário preenchido</div>
                        </div>
                        <div class = 'ui medium header'> <?= $question->getEnunciado() ?></div>
                        <form action='perguntas.php' method='POST'>
                            <div class='ui form'>
                                <div class='grouped fields'>
                                    <label>Selecione a alternativa correta:</label>
                                    
                                    <?php foreach ($alternativas as $alternativa) { ?>
                                        <div class='field'>
                                        <div class='ui radio checkbox'>
                                        <input type='radio' name='alternativa' value= "<?=$alternativa?>"   id=<?= $alternativa ?> tabindex='0' class='hidden'>
                                            <label for=<?= $alternativa ?>> <?=$alternativa?></label>
                                        </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                
                                <input type='hidden' name='id' value="<?= $id+1 ?>" >
                                <button class='ui button' type='submit'>Próximo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="three wide column"></div>
        </div>

        <div id="footer">
            <?php include '../components/footer.inc'; 
            ?>
        </div> 
    </div>
    
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.2/dist/semantic.min.js"></script>
    
</body>
</html>