<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1 style='color: red; font-size: 55px; text-align: center'>Cadastre-se</h1>

    <div style='text-align: center'>
        <form action='cadastrando.php' method='post'>
            <div style='font-size: 30px'>
                <div style='margin-bottom: 15px'>
                    Nome:
                    <input type='text' name='nome'>
                </div>    

                <div style='margin-bottom: 15px'>
                    Usuário:
                    <input type='text' name='usuario'>
                </div>          

                <div style='margin-bottom: 15px'>
                    Email:
                    <input type='text' name='email'>
                </div>  

                <div style='margin-bottom: 15px'>
                    Senha:
                    <input type='password' name='senha'>
                </div>  

                <div>
                    <input type='submit' name='cadastrar' value='Cadastrar'>
                </div>  
            </div>
        </form>
    </div>
    
</body>
</html>
