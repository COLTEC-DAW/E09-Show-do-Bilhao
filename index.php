<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.2/dist/semantic.min.css">
    <link rel="stylesheet" href="/index.css">

    <title>Show do bilhão</title>
</head>
<body>
    <div class="container">
        
        <?php include './components/menu.inc'; 
        ?>
        
        <?php 

            if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
                header("Location:./php/login.php");
            }    
        ?>

        <div class=" centre centered page grid">
            <div class="ui text container">
                <h1 class="ui header">
                    Começar a Jogar o Show do Bilhão
                </h1>
                <form action='./php/perguntas.php' method='POST'>
                    <input type='hidden' name='id' value='0'>
                    <button class="ui button primary button" type="submit">Começar<i class="right arrow icon"></i></button>
                </form>
            </div>   
        </div>
        
        <div id="footer">
            <?php include './components/footer.inc'; 
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