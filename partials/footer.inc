<footer>
    <a href="logout.php">Sair</a>
<?php if (isset($_COOKIE[$user . "-lastLogin"])) { ?>
    <p>
        Último login em: <?= $_COOKIE[$user . "-lastLogin"] ?>
    </p>
<?php } ?>
    <p>
        Desenvolvido por Gustavo Augusto e Thiago Lucas, 2022.
    </p>
</footer>