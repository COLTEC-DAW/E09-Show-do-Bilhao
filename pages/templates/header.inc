<nav class="navbar">

    <div class="user">
        <?php if (isset($login)): ?>
        <?php require "../users/gets.php"?>
        <img src="../images/<?=getFoto($login)?>.png" alt="">
        <?php
        if(strlen($login) > 20){
            $strCurta = substr($login, 0, 20)."...";
        }else{
            $strCurta = $login;
        }
        ?>
        <div class="name"><?=$strCurta?></div>
            <?php if (isset($_COOKIE[$login])) {
                echo "<div class='lstSession'>Última sessão: $_COOKIE[$login]</div>";
            }else{
                echo "<div class='lstSession'>Primeira sessão</div>";
            }
            ?>
        <div class="recorde">Recorde: <?=getHighscore($login)?></div>
        <?php endif; ?>
    </div>

    <div class="menu">
        <?php if (!isset($login)): ?>
        <a href="Login.php">Entrar</a>
        <a href="Register.php">Cadastrar</a>
        <?php else: ?>
        <a href="Logout.php">Sair</a>
        <?php endif; ?>
    </div>

</nav>
