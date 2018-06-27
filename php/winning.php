<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/winning.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <title>You win!</title>
    </head>
    <body>
        <!-- <div class="text-center offset-2 col-8">
            <div class="offset-1 col-10 boardScore">
                <img id="shia" src="/assets/shia.gif" alt="Loading" title="Loading" />
            </div>
        </div> -->
        <?php include "../components/menu.inc" ?>

        <div id="col-12 row">
             <div class="col-6" id="curtain1"></div>
             <div class="offset-2 col-8" id="boardScore">
                 <img id="gif" class="offset-md-2 col-xs-12 col-sm-12 col-md-8" src="../assets/win.gif" alt="loading">
                 <p id="score" class="text-center justify-content-center offset-2 col-8" >Score: 5/5</p>
             </div>
             <div class="col-6" id="curtain2"></div>
        </div>

        <div class="chairs row">
            <img src="../assets/footer.png" class="col-lg-3 p-0 d-none d-lg-block" alt="">
            <img src="../assets/footer.png" class="col-lg-3 col-md-4 p-0 d-none d-md-block" alt="">
            <img src="../assets/footer.png" class="col-lg-3 col-md-4 col-sm-6 p-0 d-none d-sm-block" alt="">
            <img src="../assets/footer.png" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 p-0" alt="">

        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../script/winning.js" type="text/javascript"></script>
        <script src="../script/soundmanager2-jsmin.js" type="text/javascript"></script>
    </body>
</html>
