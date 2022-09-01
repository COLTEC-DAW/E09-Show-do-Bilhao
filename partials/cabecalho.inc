<h1>Show do Bilhão!</h1>
<p>
    Bem-vindo(a) <?=  $user ?>!
</p>

<?php
    if(!isset($_COOKIE[$user . "-max"])){ 
        setcookie($user."-max", 1);
    }else if($_COOKIE[$user . "-max"] < 5){
?>
    <p>
        A sua maior pontuação alcançada foi: <?= $_COOKIE[$user . "-max"] ?>
    </p>
<?php }else{ ?>
    <p>
        A sua maior pontuação alcançada foi: 5
    </p>
<?php } ?>
<form action="logout.php">
    <input type="submit" value="Sair">
</form>