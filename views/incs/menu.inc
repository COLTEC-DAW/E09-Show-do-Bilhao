<?php
    require_once __DIR__ . "/../../models/user.inc";
?>

<header class="menu" style="
    color: white;
    background: #222;
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
    align-items: flex-end;
    padding:7px;
">
    <ul style="display: flex; flex-wrap: wrap; width: 100%; justify-content: right;">
        <li style="list-style: none; font-size: 1.2em; margin-right: 11px;"><a href="../phps/login.php" style="color: aliceblue; text-decoration: none; display: block; padding: 10px; transition: 80ms;" onMouseOver="this.style.transform='scale(1.18)'" onMouseOut="this.style.transform='scale(1)'"><abbr title="Log-In"><span class="material-symbols-outlined">login</span></abbr></a></li>
        <li style="list-style: none; font-size: 1.2em; margin-right: 11px;"><a href="../phps/logout.php" style="color: aliceblue; text-decoration: none; display: block; padding: 10px; transition: 80ms;" onMouseOver="this.style.transform='scale(1.18)'" onMouseOut="this.style.transform='scale(1)'"><abbr title="Log-Out"><span class="material-symbols-outlined">logout</span></abbr></a></li>
        <li style="list-style: none; font-size: 1.2em; margin-right: 11px;"><a href="" style="color: aliceblue; text-decoration: none; display: block; padding: 10px; transition: 80ms;" onMouseOver="this.style.transform='scale(1.18)'" onMouseOut="this.style.transform='scale(1)'"><abbr title="usuario"><span class="material-symbols-outlined">person_apron</span></abbr></a></li>
    </ul>
</header>