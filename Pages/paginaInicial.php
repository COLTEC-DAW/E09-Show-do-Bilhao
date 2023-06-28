<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require $path . "/Componentes/menu.inc";
?>
<form action="../Pages/Perguntas.php" method="get"> 
    <button type="submit">Jogar</button>
</form>
<?php require $path . "/Componentes/rodape.inc";?>