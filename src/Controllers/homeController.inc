<?php
    require "./src/Models/ModelsLoad.inc";
    if(isset($_SESSION['user'])){
        $user = unserialize($_SESSION['user']);
    }

    function redirectToLoginMessage(){
        echo "<div>";
        echo "  <h1>You're not logged in yeat</h1>";
        echo "  <a href='./login.php'>Create your account</a>";
        echo "</div>";
    }

    function loadStartButton(){
        global $user;
        echo "<div>";
        echo "    <h2>Seja Bem-vindo ao Show do Bilhão</h2>";
        echo "    <h4>Jogando como: " . $user->username . "</h4>";
        echo "    <form action='./questions.php' method='post'>";
        echo "        <input type='hidden' name='currentQuestionId' value='0'>";
        echo "        <input type='submit' value='Começar?'>";
        echo "    </form>";
        echo "</div>";
    }

    function loadScreen(){
        if(!isset($_SESSION['user'])){
            redirectToLoginMessage();
        }else{
            loadStartButton();
        }
    }



?>  