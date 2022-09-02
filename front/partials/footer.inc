<footer>
<?php if (isset($_COOKIE[$user . "-lastLogin"])) { ?>
    <p>Último login em: <?= $_COOKIE[$user . "-lastLogin"] ?></p>
<?php } ?>
    <p>Created by Amanda Bueno, 2022.</p>
</footer>