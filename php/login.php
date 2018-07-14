<!DOCTYPE html>
<?php require "./models/User.php" ?>
<?php
    if(isset($_POST["login"]) && isset($_POST["password"])) {
        $user = new User(null, null, $_POST["login"], $_POST["password"]);
        $logged = User::decodingLogin($user);
        if ($logged == false) {
            $mensagem = "Login incorreto";
        } else {
            $mensagem = null;
            session_start();
            $_SESSION["login"] = $user->getLogin();
            $_SESSION["password"] = $user->getPassword();
            header('Location: ../index.php');
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.2/dist/semantic.min.css">
    <link rel="stylesheet" href="../index.css">
    <title>Show do Bilhão</title>
</head>
<body>
    <div class="container">
        <?php include '../components/menu.inc'; 
        ?>
        <div class="ui two column centre centered page grid">
            <div class="column">
                <h2 class="ui teal image header">
                    <div class="content">
                        Log-in
                    </div>
                </h2>
                <form class="ui large form" action="login.php" method="POST">
                    <div class="ui stacked segment">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="login" placeholder="login">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="Senha">
                            </div>
                        </div>
                        <button class="ui fluid large teal submit button" type="submit" value="submit">Login</button>
                    </div>

                    <div class="ui error message">
                        <?= $mensagem ?>
                    </div>

                </form>
            </div>
        </div>

        <div id="footer">
            <?php 
                include "../components/footer.inc"
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