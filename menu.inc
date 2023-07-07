<?php
    
    //função que retorna um array com os valores contidos no cookie
    function UnpackCookie()
    {
        $user = unserialize($_SESSION['user']);
        if(isset($_COOKIE[$user->userName])){
            $valueCookie = explode(",", $_COOKIE[$user->userName]);
            return $valueCookie;
        }
    }

    //Confere se o usuario apertou para se deslogar
    if (isset($_POST['logout'])) {
        if (isset($_SESSION['user'])) { //Checa se a Sessão existe
            $user = unserialize($_SESSION['user']);
            if(isset($_COOKIE[$user->userName]) ){//Checa se o Cookie existe
                $cookie = UnpackCookie();
                SaveCookie($cookie[0]);
            }
            unset($_SESSION['user']);// Sai da Sessão
            ob_start(); // Pega lixo que estava no programa
            header("location: login.php"); // encaminha para a tela de login
        }
    }

    //Função que salvo o cookie
    function SaveCookie($score)
    {
        $user = unserialize($_SESSION['user']);//pega o objeto user
        
        setcookie($user->userName , $score . "," .  date('Y-M-d H:i') , time() + (86400 * 30));// Salva o cookie com o mesmo nome que o user
    }
    
?>


<header>
    <form method="post">
        <?php
        //Se a sessão existir, mostra na tela a opção de logout
        if (isset($_SESSION['user']))
            echo "<input type = 'submit' value = 'Logout' name = 'logout'/>";
        ?>
    </form>

</header>