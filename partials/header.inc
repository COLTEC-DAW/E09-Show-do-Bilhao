<div class="title">
    <h1>SHOW DO BILHÃO</h1>
</div>
<p>
    <a href="logout.php"><button>Sair</button></a>
</p>
<p>
    Olá <?=$user?>
</p>

<?php if (isset($_COOKIE[$user . "-max"])) { ?>
    <p>
        Sua maior pontuação foi: <?= $_COOKIE[$user . "-max"] ?>
    </p>
<?php } ?>