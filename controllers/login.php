<?php
    $user = htmlspecialchars($_POST["user"]);
    $pass = htmlspecialchars($_POST["pass"]);

    $file = "../data/usuarios.json";
    $json = file_get_contents($file);
    $data = json_decode($json);

    $erro = 1;

    foreach ($data as $value) {
        if(strcmp($value->{'username'}, $user) == 0 and strcmp($value->{'password'}, $pass) == 0) {
            setcookie("usuario", $user);
            session_start();
            $erro = 0;
        }
    }

    echo $erro;
?>