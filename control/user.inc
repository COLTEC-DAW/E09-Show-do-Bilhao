<?php
    class User {
        public $nome;
        public $login;
        public $email;
        public $senha;
        public function __construct($nome, $login, $email, $senha) {
            $this->nome = $nome;
            $this->login = $login;
            $this->email = $email;
            $this->senha = $senha;
        }
    }

    function salvaUser() {
        if(isset($_POST["cadastro"])) {
            $arquivo = fopen("json/users.json", "r+");
            $array = [];
            if(filesize("json/users.json") > 0) {
                $array = json_decode(fread($arquivo, filesize("json/users.json")))   ;
                fseek($arquivo, 0, SEEK_SET);
            }
            
            foreach($array as $user) {
                if(($user->login === $_POST["login-nome"]) || ($user->email === $_POST["email"])) {
                    fclose($arquivo);
                    echo "<script>window.location='cadastro.php'</script>";
                    return false;
                }
            }

            array_push($array, new User($_POST["nome"], $_POST["login-nome"], $_POST["email"], $_POST["senha"]));
            fwrite($arquivo, json_encode($array));
            fclose($arquivo);
        }
    }

    function Login() {
        $arquivo = fopen("json/users.json", "r");
        $array = [];
        if(filesize("json/users.json") > 0) {
            $array = json_decode(fread($arquivo, filesize("json/users.json")));
            foreach($array as $user) {
                if(($user->login === $_POST["login-nome"]) && ($user->senha === $_POST["senha"])) {
                    $_SESSION["user"] = serialize("user");
                    fclose($arquivo);
                    return true;
                }
            }
            fclose($arquivo);
            echo "<script>window.location='index.php'</script>";
            return false;
        }
        fclose($arquivo);
    }

    function Logout() {
        unset($_SESSION["user"]);
        return "index.php";
    }
?>