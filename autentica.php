<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="perguntas_styles.css">
    <title>Autenticação</title>
</head>
<body>
    <?php
        session_start();

        function verificaCadastro($usuario, $senha){
            $verificacao =  false;

            $arquivo_str = file_get_contents("data/usuarios.json");

            $usuarios = json_decode($arquivo_str);

            foreach ($usuarios as $valor) {
                if (($valor->usuario == $usuario) && ($valor->senha == $senha)) {
                    $verificacao = true;
                    header("location:perguntas.php");
                    break;
                }
            }
            
            if (!$verificacao) {
                session_destroy();
                header("location:index.php");
            }
        }

        $usuario = $_POST["EntradaUsuario"];
        $senha = $_POST["EntradaSenha"];

        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $senha;

        verificaCadastro($usuario, $senha);
    ?>
</body>
</html>