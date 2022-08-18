<?php 
   if (isset($_POST['logout'])) {
    $logout = $_POST['logout'];
   }
session_start();

if (isset($_POST['logout'])){
    if ($logout == 1){
        session_destroy();
        echo '<h1 class="text-white position-absolute ">Deslogado!</h1>';
    
    }
}











?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div class="tudo">
        <div class="containerCentral col-5 position-absolute top-50 start-50 translate-middle">
            <div class="input-group mb-3 text-center">
                <form action="index.php" method="post" class="col-12">

                    <input type="text" class="form-control col-10 text-center mb-2" placeholder="Nome" aria-label="Nome"
                        aria-describedby="button-addon2" name="login">
                    <input type="submit" value="Login" name="Enviar" class="btn btn-primary mx-auto col-12">
                    
                    <input type="hidden" value="0" name="id">
                    <input type="hidden" value='-1' name="radioResposta">';

                </form>
            </div>
        </div>

    </div>


</body>

</html>