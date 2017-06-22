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
        require 'classes.php';
        $usersdecode = decodeuser();
        $usuarios = [];
        
        $userqtd = Count($usersdecode);
        for($i=0;$i<$userqtd;$i++){
            $user = new User($usersdecode[$i]->nome,$usersdecode[$i]->email,$usersdecode[$i]->login,$usersdecode[$i]->senha);
            array_push($usuarios,$user);
        }

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
                $usuario = new User($nome,$email,$login,$senha);
                array_push($usuarios,$usuario);
                fwrite($arquivo,json_encode($usuarios,JSON_PRETTY_PRINT));
                fclose($arquivo);
                header("location: index.php");
            }
        }
        
    ?>
</body>