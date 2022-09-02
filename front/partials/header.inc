<h1>Show do Bilhão!</h1>
<p><a href="logout.php">Sair</a></p>
<p>Olá <?=  $user ?>, é hoje que vira o próximo Elon Musk?</p>

<?php if (isset($_COOKIE[$user . "-max"])) { ?>
<p>Sua maior pontuação foi: <?= $_COOKIE[$user . "-max"] ?></p>
<?php } ?>