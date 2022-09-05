<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/fotoCara.png">


    <title>Show do Ericao</title>
</head>

<body>
    <div class="tudo">
        <div class="containerCentral col-5 position-absolute top-50 start-50 translate-middle">
            <div class="input-group mb-3 text-center">
                <form action="autenticacao.php" method="post" class="col-12">

                    <div class="inputGroup">
                        <input  type="text" class="input form-control col-10 text-center mb-4 inputs" placeholder="Nome" aria-label="Nome" aria-describedby="button-addon2" name="nome">

                        <input  type="text" class="input form-control col-10 text-center mb-4 inputs" placeholder="E-mail" aria-label="E-mail" aria-describedby="button-addon2" name="email">

                        <input  type="text" class="input form-control col-10 text-center mb-4 inputs" placeholder="Login" aria-label="Login" aria-describedby="button-addon2" name="login">

                        <input  type="password" class="input form-control col-10 text-center mb-4 inputs" placeholder="Senha" aria-label="Senha" aria-describedby="button-addon2" name="senha">

                        <input  type="submit" value="Login" name="Nome" class="input botaoLogin btn btn-primary mx-auto col-12 mt-5 fs-3 fw-bold">

                    </div>




                    <input type="hidden" value="0" name="id">
                    <input type="hidden" value='-1' name="radioResposta">

                </form>
            </div>
        </div>

    </div>

</body>

</html>