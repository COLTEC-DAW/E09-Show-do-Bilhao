<!DOCTYPE html>
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
                        <p>Seja Bem Vindo!</p>
                        <?php 
                            if(isset($_COOKIE['time']) && isset($_COOKIE['score'])) {
                                echo "Seu último jogo foi " . $_COOKIE['time'];
                                echo "<br>";
                                echo "Sua última pontuação foi " . $_COOKIE['score']; 
                            } 
                        ?>
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