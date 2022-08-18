<h1>Show do Bilhão!</h1>

<?php 
    function Redirect($url, $statusCode){
       header('Location: ' . $url, true, $statusCode);
       die();
    }
?>