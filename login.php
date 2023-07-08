<?php

include "user.php";

session_start();

//Pega os dados do json
function getUser() {

    if (file_exists("./database/users.json")) {
        return json_decode(file_get_contents("./database/users.json"), true);
    } else {
        header("Location: index.php");
        exit;
    }
}

//  Verifica se o usuário existe, pelo email 
function userExist($email) {
    $todos_users = getUser();

    if($todos_users == false){
        return false;

    }else{
    foreach ($todos_users as $user) {
        if ($user['email'] === $email) {
            return $user;
        }
    }}
    return false;
}
/*----------------------    CADASTRO    ---------------------*/

//Cadastra usuário
function registraUser($email,$nome, $senha){
    $todos_users = getUser();

    $user = new User($email,$nome,$senha);

    $todos_users[] = $user->getUser();
    file_put_contents("./database/users.json", json_encode($todos_users));
}

/*----------------------    LOGIN    ---------------------*/

//Verifica Senha
function validaUser($email,$senha){
    $users = getUser();
    foreach ($users as $usuario) {
        if ($usuario['email'] === $email && $usuario['senha'] === $senha) {
            return $usuario;
        }
    }
    return [];
}

//---------------------------------------------------------------
//CADASTRO    

    if (isset($_POST["cadastro"])) {
        if (isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["email"])) {
            //Verifca se o email já está cadatrado
            if (userExist($_POST["email"]) != false) {
                echo "<p>Email já cadastrado</p>";
            } else {
                //Cria novo usuário
                $newUser= new User($_POST["email"],$_POST["name"], $_POST["password"]);

                $_SESSION["usuario"] = $newUser->getUser();
                $_SESSION["users_data"] = getUser();

                registraUser($_POST["email"],$_POST["name"], $_POST["password"]);
                echo "<p>Cadastrado com sucesso</p>";
            }
        }
    } 

//LOGIN 
    if (isset($_POST["login"])) {
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $user_logado = validaUser($_POST["email"], $_POST["password"]);
            if ($user_logado) {
                
                $_SESSION["login_status"] = true;
                $_SESSION["usuario"] = $user_logado;
                $_SESSION["users_data"] = getUser();

                header("Location: index.php");
                exit;
            } else {
                echo "<p>Senha ou email incorreto</p>"; 

            }
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
</head>
<body>
    <?php include "menu.inc"; //inclue menu?>
    <main>
        <div class="apresent_imag"></div>
        <h2>Cadastro</h2>
        <form method="POST" action="login.php" class="form_log">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name">
            <br>

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
            <br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>

            <button type="submit" name="cadastro" > OK </button>
        </form>

        <h2>Login</h2>
        <form method="POST" action="login.php" class="form_log">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            <br>

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
            <br>

            <button type="submit" name="login">OK</button>
        </form>
    </main>
    <?php include "rodape.inc"; //inclue rodape?>
</body>
</html>