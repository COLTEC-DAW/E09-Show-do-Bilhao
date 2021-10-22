<?php
    
    function onLose(){
        $format = '
            <div class="lightbox">
                <img id="lose" src="./assets/onLose.png" alt="You Lost!">
                <div class=horizontal-grid>
                    <form action="index.php" method="post" id="backhome"></form>
                    <button type="submit" form="backhome" value="Submit" id="return-home" class="dark">Return</button>
                    <form action="questions.php?question=1&restartSession=true" method="post" id="restart"></form>
                    <button type="submit" form="restart" value="Submit" id="restart-button" class="dark">Restart</button>
                </div>
               
            </div>';
        
        return $format;
    }

    function onWin(){
        $format = '
            <div class="lightbox">
                <img id="win" src="./assets/onWin.png" alt="You Win!">
                <div class=horizontal-grid>
                    <form action="index.php" method="post" id="backhome"></form>
                    <button type="submit" form="backhome" value="Submit" id="return-button" class="dark">Return</button>
                    <form action="questions.php?question=1&restartSession=true" method="post" id="restart"></form>
                    <button type="submit" form="restart" value="Submit" id="restart-button" class="dark">Restart</button>
                </div>
            </div>';
    
        return $format;
    }
?>