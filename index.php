<?php 
    // Importe de classes
    require "Models\\Question.php";
    require "Models\\User.php";
    require "Models\\GameData.php";

    // Importe de funcionalidades
    include "Lib\\Data.inc";
    include "Lib\\Menu.inc"; 
    include "Lib\\rodape.inc";

    // Inicio da sessão.
    session_start();

    // Chamada da função para realizar o sorteio das perguntas
    SortIndexs();

    //Finaliza a sessão caso o usuário pressione o botão Logout
    if(isset($_GET['Logout'])) session_destroy();

    // Realiza o processo de login(verifica as informações
    if(isset($_POST['username'])) login();
    function login(){
        $FilePath = "DataBase\\Usuarios\\" . $_POST['username'] . ".json";
        $error = "";
        if(file_exists($FilePath)){
            $User = json_decode(file_get_contents($FilePath));

            if($_POST['password'] == $User->Password && $_POST['email'] == $User->Email){
                $_SESSION['PlayerData'] = $User;
            }else{
                header('Location: login.php?error=0');
            }
            return;
        }else{
            header('Location: login.php?error=1&user='.$_POST['username']);
        }
    }

    // Concatena a proxima página ao id da pergunta
    function Destino(){
        return "perguntas.php?id=" . $_SESSION['GameData']->IndicesQuestoes[0];
    }

    // Realiza o sorteio das perguntas que serão utilizadas no jogo
    function SortIndexs(){
        $aux = [];
        $count = 0;
        
        while($count != 6){
            $random = random_int(0, Count($GLOBALS["Perguntas"])-1);
            $validate = true;
            
            for($i=0;$i<$count;$i++){
                if($aux[$i] == $random){
                    $validate = false;
                    break;
                }
            }

            if($validate){
                $aux[] = $random;
                $count++;
            }
        }

        return $aux;
    }

    // Inicializa os dados na sessão(Game Data)
    $_SESSION['GameData'] = new GameData(SortIndexs());
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title>

    <!-- Estilo do jogo -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Parte superior -->
    <?php echo GetMenu() ?>

    <div id="Cabecalho">
        <h1 id="title"> Show do Bilhão! </h1>
        <p>O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de Televisão). Neste programa, um candidato escolhido da audiência é submetido a uma sequência de 5 perguntas de conhecimento geral. A medida em que o candidato responde cada pergunta ele avança no jogo.</p>
        <p>O jogo termina quando o candidato responde uma pergunta incorretamente. Após o término do jogo o sistema calcula a pontuação final do candidato. Sua pontuação é dada pela quantidade de perguntas respondidas corretamente pelo candidato.</p>
    </div>

    <form action=<?php echo Destino()?> method="post">    
        <input type="submit" value="Iniciar">
    </form>

    <!-- Parte inferior -->
    <?php echo GetFooter() ?>
</body>
</html>