<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $user = htmlspecialchars($_POST['user']);
    $pass = htmlspecialchars($_POST['pass']);
    $confirm = htmlspecialchars($_POST['confirm']);

    $file = "../data/usuarios.json";
    $json = file_get_contents($file);
    $data = json_decode($json);

    $erro = 0;

    if($pass != $confirm) {
        $erro += 1;
    }

    foreach ($data as $value) {
        if(strcmp($value->{'username'}, $user) == 0) {
            $erro += 2;
            break;
        }
    }

    if($erro == 0) {
        $fp = fopen($file, 'w');
        $newUser = array(
            'name' => $name,
            'email' => $email,
            'username' => $user,
            'password' => $pass
        );

        array_push($data, $newUser);
        $save = json_encode($data);

        fwrite($fp, $save);
    }

    echo $erro;
?>