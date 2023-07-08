<?php 

    require("classes.inc");

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $stringArquivo = file_get_contents("./users.json");
    $arrayArquivo = json_decode($stringArquivo, true);
    $itWorked = false;

    clearstatcache();
    if(filesize("./users.json") == 0){

        $msg = "<h4>Erro: Login ou Senha incorretos!</h4>";

    }
    else {
        foreach($arrayArquivo as $userCheck){
            
            if($userCheck["login"] == $login){
                
                if($userCheck["senha"] == $senha){

                    session_start();

                    $usuario = new User(htmlspecialchars($userCheck["nome"]), htmlspecialchars($userCheck["email"]), htmlspecialchars($userCheck["login"]), htmlspecialchars($userCheck["senha"]));
                    $nameCookie = "ultimo" . $usuario->login;

                    $msg = "<div id='userInfo'><h3>Olá, $usuario->nome!</h3> <h4>Username: $usuario->login</h4> <h4>Email: $usuario->email</h4> <h4>Última vez logado: $_COOKIE[$nameCookie]</h4></div>";
                    $itWorked = true;

                    $_SESSION["nome"] = $usuario->nome;
                    $_SESSION["login"] = $usuario->login;
                    
                    break;
                    
                }
                else {

                    $msg = "<h4>Erro: Login ou Senha incorretos!</h4>";

                }
            }
            else {

                $msg = "<h4>Erro: Login ou Senha incorretos!</h4>";

            }
        
        }
    
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <div>
        <?php 
        
            echo $msg;
        
            if($itWorked == true){

                echo '<form action="./perguntas.php" method="post">
                    <div>
                        <input type="submit" value="Jogar">
                        <input type="hidden" value="0" name="id">
                        <input type="hidden" value="0" name="escolha">
                    </div>
                </form>
                
                <form action="./index.php" method="post">
                    <div>
                        <input type="submit" value="Desconectar" id="saiDaqui">
                    </div>
                </form>';

            }
            else {

                echo '<form action="./index.php" method="post">
                    <div>
                        <input type="submit" value="Voltar ao menu">
                    </div>
                </form>';

            }

        ?>
    </div>
    <?php include("rodape.inc"); ?>
    <script src="script.js"></script>
</body>
</html>