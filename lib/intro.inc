<?php
    include 'models\player.php';

    function getIntro(){
        $format = '';
        if(isset($_SESSION['Player'])){
            $format = '<div class="intro-container"><div id="greet"> Hello ' . $_SESSION['Player']->username . '!</div></br>';
        }

        if(!isset($_SESSION['Player'])){
            $format = $format . '<div class="intro-container"><div id="intro" class="dark">Show do Bilhão é um game show brasileiro de perguntas e resposta, que concede um prêmio máximo de um bilhão de reais e prêmios menores de acordo com o desempenho no Quiz de perguntas!
            <div class="horizontal-grid end"><form action="login.php" method="post" id="log"></form>
            <button type="submit" form="log" value="Submit" class="white">Sign In</button></div></div></div>';
        }
        elseif(isset($_SESSION['Player']) && $_SESSION['Player']->id == "admin")
        {
            $format = $format . '<div id="intro" class="white">Show do Bilhão é um game show brasileiro de perguntas e resposta, que concede um prêmio máximo de um bilhão de reais e prêmios menores de acordo com o desempenho no Quiz de perguntas!
            <div class="horizontal-grid end"><form action="admin.php" method="post" id="admin"></form>
            <button type="submit" form="admin" value="Submit" class="dark">View as Admin</button>
            <form action="questions.php?question=1&restartSession" method="post" id="start"></form>
            <button type="submit" form="start" value="Submit" class="dark">Start</button></div></div></div>';
        } 
        else
        {
            $format = $format . '<div id="intro" class="white">Show do Bilhão é um game show brasileiro de perguntas e resposta, que concede um prêmio máximo de um bilhão de reais e prêmios menores de acordo com o desempenho no Quiz de perguntas!
            <div class="horizontal-grid end"><form action="questions.php?question=1&restartSession" method="post" id="start"></form>
            <button type="submit" form="start" value="Submit" class="dark">Start</button></div></div></div>';
        }

        return $format;
    }
?>