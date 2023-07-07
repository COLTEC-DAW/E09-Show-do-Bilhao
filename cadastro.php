<?php
//O método de requisição utilizado para pegar as informações é POST, portanto, ["REQUEST_METHOD"] == "POST"
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $usersExisting = [];
    /*file_exists - Verifica se um arquivo ou diretório existe
      userJson - arquivo contendo os dados do usuário
      json_decode - Decodifica uma string JSON
      file_get_contents — Lê o arquivo inteiro em uma string
    */
    if(file_exists("usersJson.json")) {
        $usersExisting = json_decode(file_get_contents("usersJson.json"), true);
    }
    if (isset($_POST["signUp"])) {
        $userName = $_POST["userName"];
        foreach ($usersExisting as $user) {
            if ($user["email"] === $email) {
                echo "Este email já está cadastrado. Tente logar!";
                exit;
            }
        }
        $data = date("d/m/Y H:i");
        $user = array(
            "email" => $email,
            "userName" => $userName,
            "password" => $password,
        );
        //setcookie — Envia um cookie
        setcookie("lastSession", $data);
        $usersExisting[] = $user;
        //file_put_contents — Grava os dados para o arquivo
        file_put_contents("usersJson.json", json_encode($usersExisting, JSON_PRETTY_PRINT));
        $_SESSION["user"] = $user;
        $_SESSION["existing"] = $usersExisting;
        //header - direciona a página para o Pré-jogo
        header("Location: preGame.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela-cadastro</title>
</head>
<body>
    <div class="bloco-login">
        <img src="ShowEscuro.png">
        <h1>
            <div class="ItensLogin">
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required><br><br>
                    <label for="userName">Nome:</label>
                    <input type="text" name="userName" required><br><br>
                    <label for="password">Senha:</label>
                    <input type="password" name="password" required><br><br>
        <h1>
                        <input class="iniciar" type="submit" name="signUp" value="Enviar">
            </div>
            </form>
    </div>
    </div>
</body>
</html>