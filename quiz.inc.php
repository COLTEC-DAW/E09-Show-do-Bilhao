<?php
    function QuestionNotFound()
    {
        echo '<div class="error"> <h2>Ops! A pergunta que você procura não existe :(</h2> </div>';
    }
    function WinScreen()
    {
        echo '<div class="box">';
        echo '<h1>Vitória!</h1>';
        echo '</div>';
    }
    function LoseScreen()
    {
        echo '<div class="box">';
        echo '<h1>Perdeste</h1>';
        echo '</div>';
    }
?>