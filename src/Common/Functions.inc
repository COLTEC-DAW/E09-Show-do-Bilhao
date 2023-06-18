<?php
    if(isset($_POST['logout'])){
        logout();
        unset($_POST['logout']);
        header("Refresh:0; url=index.php");
    }

    function logout(){
        if(isset($_SESSION['user'])){
            session_destroy();
        }
    }
?>