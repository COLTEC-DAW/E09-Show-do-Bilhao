<?php
require("User.php");



function register_user($obj){
    $data = file_get_contents('Usuarios.json');
    $json_arr = json_decode($data, true);
    $json_arr[] = $obj;


    file_put_contents('Usuarios.json', json_encode($json_arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

?>