<!DOCTYPE html>

<?php require "php/perguntas.php"; ?>
<?php


    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        $id = -1;
    }

    if($id > 3){
        header("Location:php/winning.php");
    }
    $id++;
    $dados = carregaPergunta($id);
?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/master.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Open+Sans+Condensed:300" rel="stylesheet">

        <title></title>
    </head>
    <body>
        <?php include "components/menu.inc"; ?>
       <div id="mainCard" class="card offset-xs-1 col-xs-10 offset-sm-1 col-sm-10 offset-md-3 col-md-6  align-self-center mt-5" >
           <div class="card-body">
               <p id="subtitle" >FILMES</p>
               <h3 class="card-title"><?=$dados[0]?></h3>
           </div>
           <ul class="list-group justify-content-center">

               <form class="" action="index.php" method="post">
                   <input type="hidden" name="id" value="<?=$id?>" />
                   <li class="option list-group-item list-group-item-light"><button class="button" type="submit" ><p><?= $dados[1][0] ?></p></button></li>
               </form>
               <form class="" action="index.php" method="post">
                   <input type="hidden" name="id" value="<?=$id?>" />
                   <li class="option list-group-item list-group-item-light"><button class="button" type="submit" ><p><?= $dados[1][1] ?></p></button></li>
               </form>
               <form class="" action="index.php" method="post">
                   <input type="hidden" name="id" value="<?=$id?>" />
                   <li class="option list-group-item list-group-item-light"><button class="button" type="submit" ><p><?= $dados[1][2] ?></p></button></li>
               </form>
               <form class="" action="index.php" method="post">
                   <input type="hidden" name="id" value="<?=$id?>" />
                   <li class="option list-group-item list-group-item-light"><button class="button" type="submit" ><p><?= $dados[1][3] ?></p></button></li>
               </form>
               <form class="lForm" action="index.php" method="post">
                   <input type="hidden" name="id" value="<?=$id?>" />
                   <li class="lForm option list-group-item list-group-item-light"><button class="button" type="submit" ><p><?= $dados[1][4] ?></p></button></li>
               </form>

           </ul>
       </div>
       <?php include "components/rodape.inc"; ?>

       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

       </script>


    </body>
</html>
