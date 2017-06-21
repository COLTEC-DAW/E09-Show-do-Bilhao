<?php
	
	$nome=$_POST['nome'];
    $email=$_POST['email'];
    $login=$_POST['login'];
	$senha=$_POST['pwd'];

    // Array com dados
    $cadastro = array(
        'nome'  => $nome,
        'email' => $email,
        'login' => $login,
        'senha' => $senha
    );

    $fp = fopen("users.json", "a+"); //Abre o arquivo para escrita e leitura

    //decodifica o arquivo json
    $info = file_get_contents("users.json");
    $jsonObj = json_decode($info); 
    
    array_push($jsonObj, $cadastro); //concatena novo user com os usuarios antigos
    $newdados = json_encode($jsonObj); //muda para json
    fclose($fp); //fecha arquivo

    $fp = fopen("users.json", "w"); //abre arquivo para escrita apagando tudo
   
    $escreve = fwrite($fp, $newdados); //escreve 
    echo $newdados;
    echo "<h2> Cadastro efetuado com sucesso! </h2>";
    sleep(2);
    header("Location: jogador.html");
    fclose($fp); //fecha o arquivo



?>