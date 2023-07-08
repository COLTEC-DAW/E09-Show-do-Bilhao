<?php 

    require("classes.inc");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $usuario = new User($nome, $email, $login, $senha);

    $stringArquivo = file_get_contents("./users.json");
    $arrayArquivo = json_decode($stringArquivo, true);
    $itWorked = false;


    clearstatcache();
    if(filesize("./users.json") == 0){

        $msg = "<h4>Usuário cadastrado com sucesso!</h4>";

        $arrayUser = get_object_vars($usuario);

        $infoArquivo = json_encode($arrayUser, JSON_PRETTY_PRINT);

        $jsonFile = fopen("./users.json", 'w');

        fwrite($jsonFile, "[$infoArquivo]");

        fclose($jsonFile);

        $nameCookie = "ultimo" . $usuario->login;

        setcookie($nameCookie, "nunca logou antes");

        
    }
    else {
        foreach($arrayArquivo as $userCheck){
            $msg = "<h4>Erro: Não foi possível cadastrar!</h4>";
            if($userCheck["email"] == $usuario->email){
                $msg .= "<h4>Motivo: Já existe um usuário com este email!</h4>";
                $itWorked = false;
                break;
            }
            elseif($userCheck["login"] == $usuario->login){
                $msg .= "<h4>Motivo: Já existe um usuário com este username!</h4>";
                $itWorked = false;
                break;
            }
            elseif($usuario->nome == "" || $usuario->email == "" || $usuario->login == "" || $usuario->senha == ""){
                $msg .= "<h4>Motivo: Um ou mais dos campos não foi preenchido</h4>";
                $itWorked = false;
                break;
            }
            else {
                $itWorked = true;
            }
        }
        if($itWorked == true){
            $msg = "<h4>Usuário cadastrado com sucesso!</h4>";
            $arrayUser = get_object_vars($usuario);
            foreach($arrayArquivo as $info){
                $auxObject = new User($info["nome"], $info["email"], $info["login"], $info["senha"]);
                $toFile[] = $auxObject;
            }
            $toFile[] = $arrayUser;
            $infoArquivo = json_encode($toFile, JSON_PRETTY_PRINT);
            $jsonFile = fopen("./users.json", 'w');
            fwrite($jsonFile, $infoArquivo);
            fclose($jsonFile);

            $nameCookie = "ultimo" . $usuario->login;

            setcookie($nameCookie, "nunca logou antes");

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
        
        ?>
        <form action="./index.php" method="post">
            <div>
                <input type="submit" value="Voltar ao menu">
            </div>
        </form>
    </div>
    <?php include("rodape.inc"); ?>
    <script src="script.js"></script>
</body>
</html>