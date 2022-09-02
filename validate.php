<?php 
    $filePath = "./dataBase/users.json";

    class User {
        var $name;
        var $email;
        var $login;
        var $password;

        function __construct($name, $email, $login, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->login = $login;
            $this->password = $password;
        }
    }

    $file = fopen($filePath, "r+");
    $users = json_decode(fread($file, filesize($filePath)));

    if(isset($_POST["register"])) {
        $currentUser = new User($_POST["name"], $_POST["email"], $_POST["login"], $_POST["password"]);

        foreach($users as $user) {
            if($user->login == $currentUser->login) {
                echo "<script>
                    alert('Usuário já existente');
                    window.location.href = 'login.php';
                </script>";
            }
        }

        array_push($users, $currentUser);

        if (file_put_contents($filePath, json_encode($users))) {
            echo "<script>
                alert('Usuário cadastrado com sucesso!');
                window.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>
                alert('Falha ao cadastrar usuário, tente novamente...');
                window.location.href = 'login.php';
            </script>";
        }
    } else {
        foreach($users as $user) {
            if($user->login == $_POST["login"]) {
                if($user->password == $_POST["password"]) {
                    session_start();

                    $_SESSION["username"] = $user->name;

                    if(!isset($_COOKIE["{$user->name}LastLogin"])) {
                        setcookie("{$user->name}ScoreMax", "0");
                        setcookie("{$user->name}LastLogin", date('d/m/Y | h:i:sa', strtotime('-3 hours')));
            
                        header("location: index.php");
                    } else {
                        header("location: index.php");
                    }

                    echo "<script>
                        alert('Login realizado com sucesso');
                        window.location.href = 'index.php';
                    </script>";
                } else {
                    echo "<script>
                        alert('Senha incorreta!');
                        window.location.href = 'login.php';
                    </script>";
                }
            }
        }

        echo "<script>
            alert('Usuário inexistente');
            window.location.href = 'register.php';
        </script>";
    }

?>
