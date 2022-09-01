<footer>
<?php if (isset($_COOKIE[$user . "-lastLogin"])) { ?>
    <p>
        Último login efetuado em: <?= $_COOKIE[$user . "-lastLogin"] ?>
    </p>
<?php } ?>
    <p>
        <small>Criado por Gabriel Rodrigues Pereira e Bernardo Tavares, 2022.</small>
    </p>
</footer>