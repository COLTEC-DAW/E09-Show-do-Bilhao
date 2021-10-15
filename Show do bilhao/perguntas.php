<?php
    require("classes.php");

    $poo = array();
    $arq = fopen("./users.txt", "r+t");

    while(!feof($arq)) {
        $linha = fgets($arq);
        $param = explode(",", $linha);

        $newArq = new Arq($param[0], $param[1], $param[2], $param[3]);
        $poo[] = $newArq;
        $newPerg = new perg($perguntas);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title>
</head>
<body>
<form action="perguntas.inc" method="get">
   Seu login: <input type="text" name="login"> <br>
   Sua senha: <input type="password" name="senha"> <br>
   Digite o numero da pergunta de 1 a 5: <input type="number" name="idPergunta">
    <?php
        include "jogador.inc";
        include "perguntas.inc";
        $_COOKIE['login'];
        $_COOKIE['senha'];

        $arq = fopen("./users.txt", "r+t");
    ?>
    <table>
        <?php
            foreach($arquivo as $poo) {
        ?>
        <tr>
            <td><?php echo "$arquivo->nome"; ?></td>
            <td><?php echo "$arquivo->email"; ?></td>
            <td><?php echo "$arquivo->login"; ?></td>
            <td><?php echo "$arquivo->senha"; ?></td>
            <td><?php echo "$arquivo->newPerg"; ?></td>
        </tr>
        <?php } ?>
    </table>
</form>
</body>
</html>
<?php
fclose($arq);
?>