<html>
  <body>

    <?php

    require 'perguntas.inc';
     for($i=0; $i<5; $i++) {
        echo $per[$i]; 
        echo "<br>";
          for($j=0; $j<4; $j++){
            echo $alt[$i][$j];
            echo "<br>";
          }
     }
     
     
    ?>

  </body>
 
    
</html>