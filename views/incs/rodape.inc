<footer>
<?php if (isset($_COOKIE[$user . "-lastLogin"])) { ?>
    <p>Último login em: <?= $_COOKIE[$user . "-lastLogin"] ?></p>
<?php } ?>
    <p>Made by Alvim</p>
    <ul>
        <li>
            <div>
                <img alt="instagram">
                <p>@alvim_brn</p>
            </div>
        </li>
        <li>
            <div>
                <img alt="github">
                <p>@alvimdev</p>
            </div>
        </li>
        <li>
            <div>
                <img alt="linkedIn">
                <p>/bernardo_alvim</p>
            </div>
        </li>
    </ul>
</footer>