<head>
            <title>Jogo do Bilhão</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body style = "background-color: navajowhite;">
    <?php
        ob_start();
        require 'arquivos.inc';
        $usersdecode = decodeuser();
        
        $nome= $_POST["name"];
        $email =  $_POST["email"];
        $login= $_POST["login"];
        $senha =  $_POST["senha"];
        
        if($nome == null || $email == null || $login == null || $senha == null){
            ?>
                    <div id="topo">
                        <h3 style= "padding: 10px; text-align: center;">Algum campo tá vazio, ai é foda ne</h3>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="location.href = 'cadastro.php' ;">Voltar a tela de cadastro</button>
                    </div>
                <?php  
        }
        else{
            if(existeuser("email",$usersdecode,$email)){
                //JÁ EXISTE O EMAIL CADASTRADO
                ?>
                    <div id="topo">
                        <h3 style= "padding: 10px; text-align: center;">E-MAIL INDISPONÍVEL</h3>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="location.href = 'cadastro.php' ;">Voltar a tela de cadastro</button>
                    </div>
            <?php
            }
            else if(existeuser("login",$usersdecode,$login)){
                //JÁ EXISTE O NICK DIGITADO
                ?>
                    <div id="topo">
                        <h3 style= "padding: 10px; text-align: center;">NICK INDISPONÍVEL</h3>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="location.href = 'cadastro.php' ;">Voltar a tela de cadastro</button>
                    </div>
                <?php  
            }
            else{
                //CADASTRA O USUSARIO
                $arquivo = fopen("usuarios.json","w");
                $array = array(
                    'nome' => $nome,
                    'email' => $email,
                    'login' => $login,
                    'senha' => $senha
                );

                array_push($usersdecode,$array);
                fwrite($arquivo,json_encode($usersdecode,JSON_PRETTY_PRINT));
                fclose($arquivo);
                header("location: index.php");
            }
        }
        
    ?>
</body>