<div class='form'>
    <h2> LOGIN </h2>
    <form action='index.php?id=0' method='POST'>
    <div class='login'>
        <label> <input type='text' name='login'> Digite seu login </label>
    </div>
    <div class='login'>
        <label> <input type='text' name='senha'> Digite sua senha </label>
    </div>
    <input class='pergunta' type='submit' name='resp'>

    <p>Último jogo: <?php echo $_COOKIE["ultimo-jogo"]; ?></p>
    <p>Última pontuação: <?php echo $_COOKIE["ultPontuacao"]; ?></p>
</div>

