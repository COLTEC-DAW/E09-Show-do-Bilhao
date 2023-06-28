<?php
require "../Componentes/menu.inc";
require "../Controllers/perguntas.php";
?>
    <h1>Pergunta <?php $id+1?></h1>
    <p>Acertos: <?php echo "$pontuacao/5" ?></p>
    <h2><?php echo "$pergunta->enunciado"?></h2>
    <form action="/Pages/Perguntas.php" method="post">
        <?php
        for($i=0;$i<count($pergunta->alternativas);$i++){
            echo "<input type='radio' name='opcao' value=$i>";
            echo "<label>".$pergunta->alternativas[$i]."</label>";
        }
        ?>
        <input type='hidden' name="pergunta" value="<?php echo $id?>"/>
        <input type='hidden' name="pontuacao" value="<?php echo $pontuacao?>"/>
        <button type= "submit">Enviar resposta</button>
    </form>
    <?php
require "../Componentes/rodape.inc";
?>