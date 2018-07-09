<?php
    $Pessoa->nome = $_POST["nome"];
    $Pessoa->email = $_POST["email"];
    $Pessoa->login = $_POST["login"];
    $Pessoa->senha = $_POST["senha"];

    $PessoaJSON = json_encode($Pessoa);
    
    $ArquivoJSON = file_get_contents("Arquivos/users.json");
    
    // Verifica login //
    if (strpos($ArquivoJSON, "\"login\":\"".$Pessoa->login)){
        echo "Nome de usuário já cadastrado";
    }



    if($ArquivoJSON == "[]"){
        $ArquivoJSON = str_replace("[", "[".$PessoaJSON, $ArquivoJSON);
    }else{
        $ArquivoJSON = str_replace("[", "[".$PessoaJSON.",", $ArquivoJSON);
    }

    
    $file = fopen("Arquivos/users.json", "w");
    fwrite($file, $ArquivoJSON);
    fclose($file); 
    
?>