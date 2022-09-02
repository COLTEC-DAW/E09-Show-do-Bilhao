<?php
    require "Usuário.php";
    define("USUARIO_JA_CADASTRADO", TRUE);
    define("USUARIO_NAO_CADASTRADO", FALSE);
    function verify_signed_user($nome_arquivo, Usuario $data)
    {
        $arquivo_usuarios = json_decode(file_get_contents($nome_arquivo));
        if($arquivo_usuarios == null)
        {
            return USUARIO_NAO_CADASTRADO;
        }
        foreach($arquivo_usuarios as $usuarios)
        {
            if($usuarios->login == $data->login)
            {
                return USUARIO_JA_CADASTRADO;
            }
        }
        return USUARIO_NAO_CADASTRADO;
    }
    function insert_into_json($nome_arquivo, Usuario $data)
    {
        if(!file_exists($nome_arquivo))
        {
            fopen($nome_arquivo, "w");
        }
        $usuarios = json_decode(file_get_contents($nome_arquivo));
        if(!isset($usuarios))
        {
            file_put_contents($nome_arquivo, json_encode([$data], JSON_PRETTY_PRINT), LOCK_EX);
        }
        else if(verify_signed_user($nome_arquivo, $data))
        {
            return USUARIO_JA_CADASTRADO;
        }
        else
        {
            array_push($usuarios, $data);
            file_put_contents($nome_arquivo, json_encode($usuarios, JSON_PRETTY_PRINT), LOCK_EX);
        }
    }
    $user = new Usuario($_POST['login'], $_POST['senha'], $_POST['email'], $_POST['nome']);
    $verification = insert_into_json("Usuários.json", $user);
    if($verification)
    {
        echo "Login já cadastrado";
        echo "<br><a href='Cadastro.php'><button>Voltar para pagina de cadastro</button></a>";
        exit(1);
    }
    header("Location: Entrar.php", TRUE, 301);
?>
