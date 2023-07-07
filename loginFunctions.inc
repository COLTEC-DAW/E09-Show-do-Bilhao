<?php

//Função principal
function rightForm()
{

    //Checa se o user apertou o botão de registrar
    if (isset($_POST["registrar"])) {

        $arquivo = json_decode(file_get_contents("users.json")); //pega o arquivo json de users
        $searchLogin = $_POST["login"]; //atribui o nome de usuario inserido no campo texto
        //Confere se o usuario já existe
        foreach ($arquivo as $a) {
            if ($a->userName == $searchLogin) {
                $_POST['existe'] = true;//Seta que o username já esta em uso já existe
            }
        }

        //Se o username não estiver em uso, adiciona uma nova conta no users.json
        if ($_POST['existe'] != true) {
            $user = new User($_POST["login"], $_POST["password"], $_POST["email"], $_POST["name"]);
            $arquivo = fopen("users.json", "r+");
            if (filesize('users.json') == 0) {
                fwrite($arquivo, '[' . json_encode($user) . ']');
            } else {
                fseek($arquivo, -1, SEEK_END);
                fwrite($arquivo, ',' . json_encode(($user)) . ']');
            }
            fclose($arquivo);
        } else {// Se o username extiver em uso, notifica o usuario
            $_POST['existe'] = false;
            echo "<p style='color:red'>Username already in use, try another</p>";
        }
    }

    //Checa se o user apertou o botão de logar
    if (isset($_POST["logar"])) {

        $arquivo = json_decode(file_get_contents("users.json")); //pega o arquivo json de users
        $searchLogin = $_POST["login"]; //atribui o nome de usuario inserido no campo texto
        $searchPassword = $_POST["password"]; //atribui a senha do usario

        foreach ($arquivo as $a) {
            if ($a->userName == $searchLogin) { // confere se o usuario existe no json
                if ($a->password == $searchPassword) { // Se o usuario existir vai conferir se a senha esta correta
                    $newUser = new User($searchLogin, $searchPassword, $a->email, $a->name); //Cria e atribui um Objeto a uma variavel
                    $_SESSION['user'] = serialize($newUser); // Salva essa variavel na sessão;
                    return;
                }
            }
        }
        //S e chegar até aqui, o usuario ou a senha estavam incorretos
        LoginForm();
        echo "<p style='color:red'>Username or password incorrect</p>";

    } else {
        //se o user apertar registrar vai para a tela de registro, se não, para a de login
        if (isset($_POST['register'])) {
            RegisterForm();
        } else {
            LoginForm();
        }
    }
}

//imprime a tela de login
function LoginForm()
{
    echo "<form action='' method='post'>";
    echo "<input type = 'text' name = 'login' placeholder='Login..' required /><br>";
    echo "<input type = 'password' name = 'password' placeholder='Password..' required /><br>";
    echo "<input type = 'submit' value = 'Logar' name = 'logar'/><br>";
    echo "</form>";
    echo "<form method = 'post'>";
    echo "<input type = 'submit' value = 'Registrar' name = 'register'>";
    echo "</form>";
}

//imprime a tela de registrar
function RegisterForm()
{
    echo "<form action='' method='post'>";
    echo "<input type='text' name='name' placeholder='Enter your name' required /><br>";
    echo "<input type='text' name='email' placeholder='Enter your email' required /><br>";
    echo "<input type = 'text' name = 'login' placeholder='Enter a User Name' required /><br>";
    echo "<input type = 'password' name = 'password' placeholder='Set a Password' required /><br>";
    echo "<input type = 'submit' value = 'Submit' name = 'registrar'/><br>";
    echo "</form>";
    echo "<form method = 'post'>";
    echo "<input type = 'submit' value = 'Logar'>";
    echo "</form>";
}
?>