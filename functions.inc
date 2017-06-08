<?php
    function carregaPergunta($id){
        global $json;
        $i = 0;

            $temp = $id + 1;
			?> 
            <h2> <?= $temp?> - <?= $json[$id]["enunciado"] ?> <br></h2>
            <FORM method="post" action="respostas.php">
			<?php foreach ($json
            [$id]["alternativas"] as $info2) { ?>
                <Input type = 'Radio' name = "resposta" value= <?= $i ?>
				<p><?= $info2 ?></p>
                <?php $i++;
			 } ?>
               <input type = "hidden" name = "gabarito" value = <?= $json[$id]["resposta"]?>>
               <Input type = "hidden" name = "id" value = <?= $id ?>>
               <input type= "submit" value="Submit">
             </FORM>

             <p>Perguntas acertadas: <?= $id?></p>
             <p>Quantidade anterior de acertos: <?=$_COOKIE["lastScore"]?></p>
             <p>Última vez que você jogou: <?=$_COOKIE["lastTime"]?></p>
    <?php } 

    function login(){
        ?>
        <FORM method="post" action="login.php">
            <p> Login: <input type="text" name="username"> </p>
            <p> Senha: <input type="password" name="password"></p>
            <input type="submit" value="Submit">
        </FORM>
        <p> Não tem uma conta? <a href="cadastro.php"> Crie uma aqui </a> </p>
        <?php
    }

    function cadastro(){
        ?>
        <FORM method="post" action="cadastro.php">
            <p> Login: <input type="text" name="username"> </p>
            <p> Senha: <input type="password" name="password"></p>
            <p> Email: <input type="text" name="email"></p>
            <p> Nome: <input type="text" name="nome"></p>
            <input type="submit" value="Submit">
        <FORM>
    <?php
    }

?>