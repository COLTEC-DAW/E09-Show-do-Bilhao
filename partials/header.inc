<h1>Show do Bilhão!</h1>
<p>
</p>
<p>
    Olá, <?=  $user ?>!
</p>

<?php if (isset($_COOKIE[$user . "-max"])) { ?>
    <p>
        Sua maior pontuação foi: <?= $_COOKIE[$user . "-max"] ?>
    </p>
<?php } ?>