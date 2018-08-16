<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $confirm = $_POST['confirm'];

    $file = "../data/usuarios.json";
    $json = file_get_contents($file);
    $data = json_decode($json);

    $erro = 0;

    if($pass != $confirm) {
        $erro += 1;
    }

    foreach ($data as $value) {
        if(strcmp($value{'username'}, $user)) {
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

        $arrayData = (array)$data;
        array_push($arrayData, $newUser);
        $data = (object)$arrayData;

        $save = json_encode($data);
        fwrite($fp, $save);
    }

    echo $erro;
?>