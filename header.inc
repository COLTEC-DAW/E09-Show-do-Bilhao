<?php
    
    function UnpackCookie()
    {
        if(isset($_COOKIE["info"])){
            $valueCookie = explode(",", $_COOKIE["info"]);
            echo $valueCookie;
            return $valueCookie;
        }
    }

    if (isset($_POST['logout'])) {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            if(isset($_COOKIE["info"]) ){
                echo "o cookie existe";
                $cookie = UnpackCookie();
                SaveCookie($cookie[1]);
            }
            else{
                echo "o cookie n existe";
                SaveCookie(0);
            }
            header("location: login.php");
        }
    }
    function SaveCookie($score)
    {
        setcookie("info", $score . "," . time() , time() + (86400 * 30), "/");
    }
    
?>

<header>
    <form method="post">
        <?php
        if (isset($_SESSION['user']))
            echo "<input type = 'submit' value = 'Logout' name = 'logout'/>";
        ?>
    </form>

</header>