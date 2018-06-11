<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <meta charset="utf-8">
        <title>Show do Bilhão   </title>
    </head>
    <body>
        <?php

            require 'dados.php';

            function carregaPergunta($id){
                $id = $_COOKIE["id"];
                    if(!$id) {
                        $id = 0;
                    }
            }
            carregaPergunta(0);

         ?>
         <div class="text-center">
             <h1>SHOW DO BILHAO</h1>
         </div>


        <div class="card align-self-center mt-5" style="width: 18rem;">
            <div class="card-header">
                <h3 class="card-title"><?=$perguntas[$i]?></h3>
            </div>
            <ul class="list-group list-group-flush">
                <form class="" action="index.php" method="get">
                    <input type="hidden" name="clicked" value="<?php echo 0; ?>" />
                    <input type="hidden" name="i" value="<?php $i; ?>" />
                    <li class="list-group-item-action"><button type="submit" ><?= $alternativas[$i][0] ?></button></li>
                </form>
                <form class="" action="index.php" method="get">
                    <input type="hidden" name="clicked" value="<?php echo 1; ?>" />
                    <input type="hidden" name="i" value="<?php $i; ?>" />
                    <li class="list-group-item-action"><button type="submit" ><?= $alternativas[$i][1] ?></button></li>
                </form>
                <form class="" action="index.php" method="get">
                    <input type="hidden" name="clicked" value="<?php echo 2; ?>" />
                    <input type="hidden" name="i" value="<?php $i; ?>" />
                    <li class="list-group-item-action"><button type="submit" ><?= $alternativas[$i][2] ?></button></li>
                </form>
                <form class="" action="index.php" method="get">
                    <input type="hidden" name="clicked" value="<?php echo 3; ?>" />
                    <input type="hidden" name="i" value="<?php $i; ?>" />
                    <li class="list-group-item-action"><button type="submit" ><?= $alternativas[$i][3] ?></button></li>
                </form>
                <form class="" action="index.php" method="get">
                    <input type="hidden" name="clicked" value="<?php echo 4; ?>" />
                    <input type="hidden" name="i" value="<?php $i; ?>" />
                    <li class="list-group-item-action"><button type="submit" ><?= $alternativas[$i][4] ?></button></li>
                </form>

            </ul>
        </div>

         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
