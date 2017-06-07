<?php
    function carregaPergunta($id){
        global $perguntas;
        global $respostas;
        $i = 0;

            $temp = $id + 1;
			?> 
            <h2> <?= $temp?> - <?= $perguntas[$id] ?> <br></h2>
            <FORM method="post" action="respostas.php">
			<?php foreach ($respostas[$id] as $info2) { ?>
                <Input type = 'Radio' name = "resposta" value= <?= $i ?>
				<p><?= $info2 ?></p>
                <?php $i++;
			 } ?>
               <Input type = "hidden" name = "id" value = <?= $id ?>>
               <input type="submit" value="Submit">
             </FORM>
    <?php } 

    function login(){
        ?>
        <FORM method="post" action="login.php">
            <p> Login: <input type="text" name="username"> </p>
            <p> Senha: <input type="password" name="password"></p>
            <input type="submit" value="Submit">
        </FORM>
        <?php
    }

?>