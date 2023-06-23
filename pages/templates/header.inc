<nav class="navbar">

    <div class="user">
        <?php if (isset($login)): ?>
        <?php require "../users/gets.php"?>
        <img src="../images/<?=getFoto($login)?>.png" alt="">
        <div class="name"><?=$login?></div>
        <?php endif; ?>
    </div>

    <div class="menu">
        <?php if (!isset($login)): ?>
        <a href="Login.php">Entrar</a>
        <a href="Register.php">Cadastrar</a>
        <?php else: ?>
        <a href="logout.php">Sair</a>
        <?php endif; ?>
    </div>

</nav>