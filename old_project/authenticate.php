<?php
    session_start();
    // Change this to your connection info.
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phplogin';
    // Try and connect using the info above.
    $mysqli = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if ( mysqli_connect_errno() ) {
        exit('Não foi possível conectar ao MySQL: ' . mysqli_connect_error());
    }

    if ( !isset($_POST['username'], $_POST['password']) ) {
        exit('Não foi possível logar na sua conta. Por favor, verifique os dados inseridos.');
    }

    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    if ($statement = $connection->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
        $statement->bind_param('s', $_POST['username']);
        $statement->execute();
        $statement->store_result();

        if ($statement->num_rows > 0) {
            $statement->bind_result($id, $password);
            $statement->fetch();
            if (password_verify($_POST['password'], $password)) {
                session_regenerate_id();
                $_SESSION['loggedIn'] = TRUE;
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['id'] = $id;
                $_SESSION['lastAccess'] = date("F d, Y h:i:s A");
                $currentUser = new User($_SESSION['username'], $_SESSION['id'], $_SESSION['LastAccess'], $0);
                echo 'Bem-vindo(a) de volta,' . $_SESSION['username'] . '!';
            } else {
                echo 'Usuário e/ou senha inválidos!';
            }
        } else {
            echo 'Usuário e/ou senha inválidos!';
        }


        $statement->close();
    }
?>