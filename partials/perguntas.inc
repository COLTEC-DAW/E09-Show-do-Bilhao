<?php
include "partials/menu.inc";
session_start();
if(!isset($_SESSION["user"])){
    $_SESSION["user"] = $_POST["user"];
}   
 
function carregaPergunta($id, $enunciados, $alternativas){
    $respostas = [0,3,1,0,2,0];   
    $numperguntas = 5;
    if (!isset($_SESSION["user"])){
        header("Location: /login.php");
    }
    if (isset($_POST['resposta'])){
        $resposta = $_POST['resposta'];
        if ($resposta != $respostas[$id]){
            header("Location: /gameover.php");
        }
    } 
    if ($id >= $numperguntas){
        if ($resposta == $respostas[$id]){
            $_SESSION["premiacao"] *= 2;
        }
        header("Location: /gameover.php");
    }
    $x = $id + 1;
    echo "<form id=form action='showdobilhao.php?id=$x' method='post'>";
    ?>
    <div class="col16" id="holder">
        <div class="col8" id="perguntas">
            <?php
            echo "<h3> {$enunciados[$id]} </h3>";
            ?>
            <ol type='A'>
                <?php
                for($y = 0; $y < count($alternativas[$id]); $y++){
                ?> 
                    <div class='col16' id='alternativas'>
                        <?php
                        echo "<input type='radio' name='resposta' value='$y' required='required'>";
                        echo "<li>{$alternativas[$id][$y]} </li>";
                        ?>
                    </div>
                <?php    
                }
                ?>    
            </ol>
            <div class="col16" id="enviar">
                <button type="submit" id="confirmar">Confirmar</button>
            </div>
            <?php
            if(!isset($_SESSION["premiacao"]) && $id == 0) {
                $_SESSION["premiacao"] = 0;
            }   
            if (isset($_POST['resposta']) && $resposta == $respostas[$id]){
                if($id == 1) {
                    $_SESSION["premiacao"] = 62500;
                } else {
                    $_SESSION["premiacao"] *= 2;
                }    
            }    
            $jogador = htmlspecialchars($_SESSION["user"]);
            ?>
            <div class="col8" id="acertou">
                <?php
                echo "<p>Usuário: $jogador </p>";
                ?>
            </div>
            <?php
            $premiacao = $_SESSION["premiacao"];
            ?>
            <div class="col8" id="acertou">
                <?php
                echo "<p>Premiação: R$ $premiacao </p>";
                ?>
            </div>
            <?php
            if(isset($_COOKIE['time']) && isset($_COOKIE['premiacao'])){
                $time = $_COOKIE['time'];
                $nowtime = time();
                $ultimapremiacao = $_COOKIE['premiacao'];
                function time_elapsed($secs){
                    $bit = array(
                        ' ano'        => $secs / 31556926 % 12,
                        ' semana'        => $secs / 604800 % 52,
                        ' dia'        => $secs / 86400 % 7,
                        ' hora'        => $secs / 3600 % 24,
                        ' minuto'    => $secs / 60 % 60,
                        ' segundo'    => $secs % 60
                        );
                    foreach($bit as $k => $v){
                        if($v > 1)$ret[] = $v . $k . 's';
                        if($v == 1)$ret[] = $v . $k;
                        }
                        if($secs > 60) array_splice($ret, count($ret)-1, 0, 'e');    
                    $ret[] = 'atrás.';
                    return join(' ', $ret);
                }
                ?>
                <div class="col8" id="acertou">
                    <?php
                    $timepast = time_elapsed($nowtime-$time);
                    echo "<p> Último jogo: $timepast </p>";
                    ?>
                </div>
                <div class="col8" id="acertou">
                    <?php
                    echo "<p> Última premiação: $ultimapremiacao </p>";
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    </form>
    <div class="col1" id="logoff">
        <form method="post">
        <button type="submit" name="logoff">Sair</button>
        </form>
    </div>
    <?php
    if (isset($_POST["logoff"])){
        session_destroy();
        setcookie("falhaLogin");
        setcookie("mensagemErro");
        header("Location: /login.php");
    }
    include "partials/rodape.inc";
}
function redireciona($id){
    if (!isset($id)){
        header("Location: /showdobilhao.php?id=0");
    }
}
$enunciados = [
    "Qual bicho transmite Doença de Chagas?",
    "Qual fruto é conhecido no Norte e Nordeste como jerimum?",
    "Qual é o coletivo de cães?",
    "Qual é o triângulo que tem todos os lados diferentes?",
    "Quem compôs o Hino da Independência?"
];
$alternativas = [
    ["Abelha","Barata","Pulga","Barbeiro"],
    ["Caju", "Abóbora", "Chuchu", "Coco"],
    ["Matilha", "Rebanho", "Alcateia", "Manada"],
    ["Equilátero", "Isóceles", "Escaleno", "Trapézio"],
    ["Dom Pedro I", "Manuel Bandeira", "Castro Alvez", "Carlos Gomes"]
];
$respostas = [0,3,1,0,2,0];    

function checaLogin($user, $senha){

    $arquivo = fopen("usuarios.json", "r");
    $users = file_get_contents("usuarios.json"); 
    $usuariosmatriz = json_decode($users, TRUE); 
    $userValido = false;
    $senhaValida = false;
    foreach ($usuariosmatriz as $objeto) { 
        if ($_POST["user"] == $objeto["user"]) { // percorre a matriz, se achar o usuário tudo certo
            $userValido = true;
            if ($_POST["senha"] == $objeto["senha"]){
                $senhaValida = true;
            }
        }
    }
    if ($userValido == false){ // se não achar o usuário, envia uma mensagem de erro e redireciona pra página de login
        $falhaLogin = true;
        $mensagemErro = "Usuário não encontrado.";
        setcookie("falhaLogin", $falhaLogin);
        setcookie("mensagemErro", $mensagemErro);
        header("Location: /login.php");
        session_destroy(); 
    } else {
    if ($senhaValida == false){ // se não achar a senha, envia uma mensagem de erro e redireciona pra página de login
        $falhaLogin = true;
        $mensagemErro = "Senha inválida.";
        setcookie("falhaLogin", $falhaLogin);
        setcookie("mensagemErro", $mensagemErro);
        header("Location: /login.php");
        session_destroy(); 
    }
}
}
?>