<?php
    $file = fopen("Arquivos/users.json", "r");
    $usuarios = json_decode(fread($file, filesize("Arquivos/users.json")));
    
    foreach ( $usuarios as $user )
    {
    echo "nome: $user->nome - email: $user->email - senha: $user->senha<br>"; 
    }



?>
