<?php
    require "./src/Models/ModelsLoad.inc";
    
    if(isset($_SESSION['user'])){
        $user = unserialize($_SESSION['user']);
    }

?>  