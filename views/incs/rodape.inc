<footer style="text-align: center; position: fixed; bottom: 0; width: 100%; color: white; background: #222; font-family: 'Roboto Mono', monospace;">
    <?php
    if (isset($_COOKIE[$user . "-lastLogin"])) {
        echo "<p>Último login em: " . $_COOKIE[$user . '-lastLogin'] . "</p>";
    }
    ?>
    <p style="font-weight: bold; ">Made by Alvim <span class="cc">&copy;</span></p>
    <ul style="display: flex; flex-wrap: wrap; justify-content: center; margin-top: 30px">
        <li style="list-style: none; margin-right: 30px;">
            <div style="cursor: pointer">
                <img class="i" height="50px" alt="instagram" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png">
                <p class="p">@alvim_brn</p>
            </div>
        </li>
        <li style="list-style: none; margin-right: 30px;">
            <div style="cursor: pointer">
                <img class="i" height="50px" alt="github" src="https://cdn.icon-icons.com/icons2/535/PNG/512/Github-Icon_icon-icons.com_52888.png">
                <p class="p">@alvimdev</p>
            </div>
        </li>
        <li style="list-style: none; margin-right: 30px;">
            <div style="cursor: pointer">
                <img class="i" height="50px" alt="linkedIn" src="https://cdn.icon-icons.com/icons2/70/PNG/512/linkedin_14170.png">
                <p class="p">/bernardo_alvim</p>
            </div>
        </li>
    </ul>
</footer>
