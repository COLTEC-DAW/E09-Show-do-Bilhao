<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/master.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Open+Sans+Condensed:300" rel="stylesheet">

        <title></title>
    </head>
    <body>
        <?php include("../components/menu.inc"); ?>

        <div id="mainCard" class="card offset-xs-1 col-xs-10 offset-sm-1 col-sm-10 offset-md-3 col-md-6 offset-lg-4 col-lg-4 align-self-center mt-5" >

            <div class="card-body">
                <p id="subtitle" >FILMES</p>
                <h3 class="card-title text-center">Login</h3>
            </div>

            <form class="mt-4" action="./../index.php" method="post">
                <ul class="list-group justify-content-center">

                    <li class="row option list-group-item list-group-item-light">
                        <div class="button input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Login:</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" name="login" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </li>
                    <li class="row option list-group-item list-group-item-light">
                        <div class="button input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Senha:</span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" name="password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </li>

                    <li class="option align-self-center mb-4 lForm list-group-item list-group-item-light"> <input class="col-12 button px-4"  type="submit" value="Entrar"></li>
                    <p  class="option- align-self-center lForm">Ainda não tem uma conta?</p>
                </ul>
            </form>
            <form class="list-group justify-content-center" action="cadastro.php" method="post">
                <li class="justify-content-center option align-self-center mb-4 lForm list-group-item list-group-item-light"> <input class="button px-4" width="100" type="submit" value="Cadastrar"></li>
            </form>
        </div>


        <?php include("../components/rodape.inc"); ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    </body>
</html>
