<?php
    require "./src/Models/ModelsLoad.inc";
    
    if(isset($_SESSION['user'])){
        $user = unserialize($_SESSION['user']);
    }

    function loadScreen(){
        if(!isset($_SESSION['user'])){
            include "./templates/redirectToLogin.inc";
        }else{
            include "./templates/startButton.inc";
        }
    }

?>  