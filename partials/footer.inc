<footer>
<?php if (isset($_COOKIE[$user . "-lastLogin"])) { ?>
    <p>
        Último login em: <?= $_COOKIE[$user . "-lastLogin"] ?>
    </p>
<?php } ?>
    <div class="footer">
        <p>Programa existente desde 500 a.c.</p>
    </div>
</footer>