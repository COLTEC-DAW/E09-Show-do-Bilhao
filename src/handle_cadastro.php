<?php
    require "User.php";
    
    define("USUARIO_CADASTRADO", TRUE);
    define("USUARIO_NAO_CADASTRADO", FALSE);

    function verify_signed_user($nome_arquivo, User $data){

        $arquivo_usuarios = json_decode(file_get_contents($nome_arquivo));
        if($arquivo_usuarios == null) return USUARIO_NAO_CADASTRADO;
        foreach ($arquivo_usuarios as $usuarios){
            if($usuarios->login == $data->login){
                return USUARIO_CADASTRADO;
            }
        }
        return USUARIO_NAO_CADASTRADO;
    }
    
    function insert_into_json($nome_arquivo, User $data){
        $old_data = json_decode(file_get_contents($nome_arquivo));
        if(isset($old_data)) $data_to_append = $old_data;
        else $data_to_append = $data;
        array($data_to_append);
        $user = verify_signed_user($nome_arquivo, $data);
        if(!$user) {
            array_push($data_to_append, $data);
            file_put_contents($nome_arquivo, json_encode($data_to_append, JSON_PRETTY_PRINT), LOCK_EX);
        } else return USUARIO_CADASTRADO;
    }

    $user = new User($_POST['login'], $_POST['senha'], $_POST['email'], $_POST['nome']);

    $verification = insert_into_json("usuarios.json", $user);

    if($verification) {
        echo "Login já cadastrado";
        echo "<br><a href='cadastro_usuario.php'><button>Voltar para pagina de cadastro</button></a>";
        exit(1);
    }

    header("Location: login.php", TRUE, 301);
?>
