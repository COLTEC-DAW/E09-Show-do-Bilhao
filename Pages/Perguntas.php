<?php
session_start();
require "../Componentes/menu.inc";
require "../Controllers/usersController.php";
global $usuario;
print_r($usuario->nome);
require "../Controllers/perguntasController.php";

?>
    <div class="pergunta">
        <div class="enunciado">

            <div class="perguntaInfo">
                <h1>Pergunta <?php echo $id+1?></h1>
                <p>Acertos: <?php echo "$pontuacao/5" ?></p>
            </div>
            <h2><?php echo "$pergunta->enunciado"?></h2>
        </div>
        <form action="/Pages/Perguntas.php" method="post" >
            <div class="alternativas">
            <?php
        for($i=0;$i<count($pergunta->alternativas);$i++){
            echo "<input type='radio' class ='alternativaItem' name='opcao' value=$i>";
            echo "<label>".$pergunta->alternativas[$i]."</label>";
        }
        ?>
        </div>
        <input type='hidden' name="pergunta" value="<?php echo $id?>"/>
        <input type='hidden' name="pontuacao" value="<?php echo $pontuacao?>"/>
        <button type= "submit">Enviar resposta</button>
    </form>
</div>
    <?php
require "../Componentes/rodape.inc";
?>