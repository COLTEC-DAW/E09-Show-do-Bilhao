<!DOCTYPE html>

<?php require "php/perguntas.php"; ?>
<?php


    if (isset($_GET['id'])) {

        $id = $_GET['id'];
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
        <title></title>
    </head>
    <body>
        <div class="text-center">
            <h1>SHOW DO BILHAO</h1>
        </div>


       <div class="card align-self-center mt-5" style="width: 18rem;">
           <div class="card-header">
               <h3 class="card-title"><?=$dados[0]?></h3>
           </div>
           <ul class="list-group justify-content-center list-group-flush">
               <form class="" action="index.php" method="get">
                   <input type="hidden" name="id" value="<?=$id?>" />
                   <li class="list-group-item-action"><button type="submit" ><?= $dados[1][0] ?></button></li>
               </form>
               <form class="" action="index.php" method="get">
                   <input type="hidden" name="id" value="<?=$id?>" />
                   <li class="list-group-item-action"><button type="submit" ><?= $dados[1][1] ?></button></li>
               </form>
               <form class="" action="index.php" method="get">
                   <input type="hidden" name="id" value="<?=$id?>" />
                   <li class="list-group-item-action"><button type="submit" ><?= $dados[1][2] ?></button></li>
               </form>
               <form class="" action="index.php" method="get">
                   <input type="hidden" name="id" value="<?=$id?>" />
                   <li class="list-group-item-action"><button type="submit" ><?= $dados[1][3] ?></button></li>
               </form>
               <form class="" action="index.php" method="get">
                   <input type="hidden" name="id" value="<?=$id?>" />
                   <li class="list-group-item-action"><button type="submit" ><?= $dados[1][4] ?></button></li>
               </form>

           </ul>
       </div>

       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>



    </body>
</html>
