<?php require "functions.inc"; ?>
<?php
    if($_POST["username"] == null)
        cadastro();
    else{

        $usuarios = [];

        $perg = fopen('users.json','r');
		$tudo = "";
        while ($line = fgets($perg)) {
            $tudo = $tudo . $line;
        }
        $json = json_decode($tudo, true);
        fclose($perg);

        foreach($json as $jsonPiece){
            $usuario = new User($jsonPiece["nome"],$jsonPiece["senha"],$jsonPiece["email"],$jsonPiece["username"]);

            array_push($usuarios, $usuario);
        }

        $newuser = new User($_POST["nome"],$_POST["password"],$_POST["email"],$_POST["username"]);

        array_push($usuarios, $newuser);

        $json = json_encode($usuarios, JSON_PRETTY_PRINT);

        $perg = fopen('users.json', 'w');
        fwrite($perg, $json);
        fclose($perg);
        ?>
        <p>Cadastro feito com sucesso.</p>
        <p>
        <a href="http://localhost:3000"> Clique aqui <a> Para voltar para a página de login. </p>
        <?php
    }
    include "rodape.inc";

?>