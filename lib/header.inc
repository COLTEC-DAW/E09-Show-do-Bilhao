<?php 

    function getHeader(){
        $format = 
        '<div class="bg-image"></div><div id="menu"><nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About the game</a>
                    <ul>
                        <li><a href="about.php">How to play?</a></li>
                        <li><a href="credits.php">Credits</a></li>
                    </ul>
                </li>
                ';

        if(!isset($_SESSION['Player']))
        {
            $format = $format . '<li><a class="loginButton" href="login.php">Sign In</a></li></ul></nav></div>';
        }
        else
        {
            $format = $format . '<li><a class="logoutButton" href="index.php?logout=true">Sign Out</a></li></ul></nav></div>';
        }

        return $format;
    }    
?>