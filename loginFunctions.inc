<?php
    function rightForm(){

        if(isset($_POST["registrar"]))
        {
            echo "passei aqui";
            $user = new User($_POST["login"], $_POST["password"]);
            $arquivo = fopen("users.json", "r+");
            if(filesize('users.json') == 0){
                fwrite($arquivo, '[' . json_encode($user) . ']');
            }
            else{
                fseek($arquivo, -1, SEEK_END);
                fwrite($arquivo, ',' . json_encode(($user)) . ']');
            }
            fclose($arquivo);
        }


        if(isset($_POST['register'])){
            RegisterForm();
        }else{
            LoginForm();
        }
    }

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

    function RegisterForm()
    {
        echo "<form action='' method='post'>";
        echo "<input type = 'text' name = 'login' placeholder='Enter a User Name' required /><br>";
        echo "<input type = 'password' name = 'password' placeholder='Set a Password' required /><br>";
        echo "<input type = 'submit' value = 'Submit' name = 'registrar'/><br>";
        echo "</form>";
        echo "<form method = 'post'>";
        echo "<input type = 'submit' value = 'Logar'>";
        echo "</form>";
    }



?>