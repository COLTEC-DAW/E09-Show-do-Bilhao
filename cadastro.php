<?php require "functions.inc"; ?>
<?php
    if($_POST["username"] == null)
        cadastro();
    else{

        $perg = fopen('users.json','r');
		$tudo = "";
        while ($line = fgets($perg)) {
            $tudo = $tudo . $line;
        }
        $json = json_decode($tudo, true);
        fclose($perg);

        $newjson = [];
        $newjson["user"] = $_POST["username"];
        $newjson["senha"] = $_POST["password"];
        $newjson["email"] = $_POST["email"];
        $newjson["nome"] = $_POST["nome"];
        
        array_push($json, $newjson);

        $json = json_encode($json);

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