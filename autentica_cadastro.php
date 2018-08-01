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

        //essa função evita cadastros com mesmo usuario
        function verificaCadastro($usuario, $email){
            $arquivo_str = file_get_contents("data/usuarios.json");

            $usuarios = json_decode($arquivo_str);

            foreach ($usuarios as $valor) {
                if ($valor->usuario == $usuario) {
                    return false;
                }
            }
            return true;
        }

        //adiciona o usuario no arquivo .json
        function adicionaUsuario($usuario, $senha, $nome, $email) {
            $usuarioAtual = array(
                "usuario"=>$usuario,
                "senha"=>$senha,
                "nome"=>$nome,
                "email"=>$email
            );

            $usuarioAtual_str = json_encode($usuarioAtual);

            //retira o colchete e coloca a vírgula no arquivo
            $arquivo_str = file_get_contents("data/usuarios.json");
            $arquivo_str_novo = str_replace("]", ",", $arquivo_str);

            //abre o arquivo
            $usuarios = fopen("data/usuarios.json", "w"); //sobreescreve
            fwrite($usuarios, $arquivo_str_novo . $usuarioAtual_str . "]");
            fclose($usuarios);
        }

        $usuario = $_POST["EntradaUsuario"];
        $senha = $_POST["EntradaSenha"];
        $nome = $_POST["EntradaNome"];
        $email = $_POST["EntradaEmail"];

        $resultadoVerificacao = verificaCadastro($usuario, $senha);

        if ($resultadoVerificacao == true) {
            adicionaUsuario($usuario, $senha, $nome, $email);
            header("location:index.php");
        }
        elseif ($resultadoVerificacao == false) {
            header("location:cadastro.php");
        }

    ?>
</body>
</html>