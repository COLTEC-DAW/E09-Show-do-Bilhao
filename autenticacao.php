<?php

//json_decode Converte String Para Array
//json_encode Converte Array Para String

$nomeDoArquivoUsuarios = 'arquivoUsuarios.json';

$arquivoUsuariosString = file_get_contents('arquivoUsuarios.json');

$arquivoUsuariosArray = json_decode($arquivoUsuariosString, TRUE);

$usuarioJaCadastrado = false;

class Usuario{
    var $nome;
    var $email;
    var $login;
    var $senha;
    function __construct($nome, $email, $login, $senha)
    {
        $this->nome  = $nome;
        $this->email = $email;
        $this->login = $login;
        $this->senha = $senha;
    }
}

if (!(file_exists($nomeDoArquivoUsuarios))) {
    file_put_contents($nomeDoArquivoUsuarios, "");
}

if (isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['nome']) && isset($_POST['email'])) { //Testa se foram recebidos todos os dados
    $nomeUsuario =  $_POST["nome"];
    $emailUsuario = $_POST["email"];
    $loginUsuario = $_POST["login"];
    $senhaUsuario = $_POST["senha"];

    $usuarioAtual = new Usuario($nomeUsuario, $emailUsuario, $loginUsuario, $senhaUsuario); //Instancia a classe Usuario com o Usuario atual

    if (empty($loginUsuario) || empty($senhaUsuario) || empty($nomeUsuario) || empty($emailUsuario)) { // Se algum dos campos da autenticação está vazio, reseta a página
        header("Location: paginaInicial.php");
        die();
    }

    if (!empty($arquivoUsuariosArray)) { //Se o arquivo não está vazio :
        foreach ($arquivoUsuariosArray as $objetoAtual) { // Percorre todo o arquivo Usuarios
            if ($nomeUsuario == $objetoAtual['nomeUsuario']) { //Se o nome já está cadastrado no arquivo :
                if ($usuarioAtual->senha == $objetoAtual['senhaUsuario']){ // Se a senha está correta?
                    $jogarOuVoltar = "Jogar";
                    $cadastradoOuLogado = "Bem vindo de volta " . $nomeUsuario . " !";
                    $destinoBotao = "index.php";
                    $usuarioJaCadastrado = true;
                }
                else{ // Se a senha está incorreta
                    $jogarOuVoltar = "Voltar";
                    $cadastradoOuLogado = "Senha Incorreta !";
                    $destinoBotao = "paginaInicial.php";
                    $usuarioJaCadastrado = true;
                }
            }
        }
        if (!$usuarioJaCadastrado) {
            //Cadastra Usuário
            $arquivoUsuariosArray[] = ["nomeUsuario" => $nomeUsuario, "emailUsuario" => $emailUsuario, "loginUsuario" => $loginUsuario, "senhaUsuario" => $senhaUsuario];
            $arquivoUsuariosString = json_encode($arquivoUsuariosArray);
            file_put_contents('arquivoUsuarios.json', $arquivoUsuariosString);
            //Cadastra Usuário

            $cadastradoOuLogado = "Cadastro realizado com Sucesso !";
            $jogarOuVoltar = "Voltar";
            $destinoBotao = "paginaInicial.php";
        }
    } else {  //Se o arquivo está vazio : 

        //Cadastra Usuário
        $arquivoUsuariosArray[] = ["nomeUsuario" => $nomeUsuario, "emailUsuario" => $emailUsuario, "loginUsuario" => $loginUsuario, "senhaUsuario" => $senhaUsuario];
        $arquivoUsuariosString = json_encode($arquivoUsuariosArray);
        file_put_contents('arquivoUsuarios.json', $arquivoUsuariosString);
        //Cadastra Usuário

        $cadastradoOuLogado = "Cadastro realizado com Sucesso !";
        $jogarOuVoltar = "Voltar";
        $destinoBotao = "paginaInicial.php";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Show do Ericao</title>
    <link rel="icon" type="image/x-icon" href="./images/fotoCara.png">

</head>

<body>

    <div class="backgroundTests">

        <div class="position-absolute top-50 start-50 translate-middle">
            <form action="<?php echo ($destinoBotao); ?>" method="post" class="col-12">


                <p class="fs-1 text-white"> <?php echo ($cadastradoOuLogado); ?></p>
                <input type="submit" value="<?php echo ($jogarOuVoltar); ?>" name="Nome" class="botaoVoltarAut btn btn-primary mx-auto col-12 mt-2  btn btn-info fs-1 text-dark fw-semibold">


                <input type="hidden" value="0" name="id">
                <input type="hidden" value='-1' name="radioResposta">
            </form>

        </div>
    </div>

</body>

</html>