<!Doctype>
<html>
    <body>
        <h1>RESULTADOS</h1>
        <?php
        global $acertos;
        if ($acertos == 20) { ?>
            <h2>Parabéns, você GANHOU!</h2>
            <p>Você fez X pontos</p>
  <?php }
        else { ?>
            <h2>Parece que não foi hoje...</h2>
  <?php } ?>
        <a href="logout.php"></a>
    </body>
</html>