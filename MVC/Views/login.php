<h1>Login</h1>
<?php
    if(isset($_POST["cadastro_login"])) {
        $caminhoArquivo = "assets/arquivos/usuarios.json";
        $usuarios = json_decode(file_get_contents($caminhoArquivo), true);
    
        // Adiciona o novo usuario no array
        $usuarios[] = array(    
            'login' => $_POST["cadastro_login"],
            'senha' => $_POST["cadastro_senha"],
            'email' => $_POST["cadastro_email"],
            'user' => $_POST["cadastro_user"]
        );
    
        // Converte novamente para o formato JSON   
        $usuariosAtualizado = json_encode($usuarios);
        file_put_contents($caminhoArquivo, $usuariosAtualizado);

        unset($_POST["cadastro"]);
    }
?>
<form action="../../index.php" method="POST">
    <label for="login">Login: </label>
    <input type="text" name="login">

    <label for="senha">Senha: </label>
    <input type="password" name="senha">
    
    <input type="submit">
</form>

<button>
    <a href="MVC/Views/cadastro.php">cadastrar</a>
</button>