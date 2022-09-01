<div class="header">
    <h1>BEM-VINDO AO SHOW DO BILHÃO</h1>
</div>
<p>
    <a href="logout.php">Sair</a>
</p>
<p>
    Olá <?=  $user ?>, dá bilhão?
</p>

<?php if (isset($_COOKIE[$user . "-max"])) { ?>
    <p>
        Sua maior pontuação foi: <?= $_COOKIE[$user . "-max"] ?>
    </p>
<?php } ?>