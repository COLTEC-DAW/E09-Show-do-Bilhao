<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require $path . "/Componentes/menu.inc";
?>
<form action="../Controllers/perguntas.php" method="post">
    <input type='hidden' name="pergunta" value="0"/>
    <button type="submit">Jogar</button>
</form>
<?php require $path . "/Componentes/rodape.inc";?>