<?php

function Login($usuario, $senha){
    $listaDeUsuarios = json_decode(file_get_contents("usuarios.json"));

    foreach ($listaDeUsuarios as $usuarios){
        
        if($usuarios->Usuario == $usuario){
            if($usuarios->Senha == $senha){
                session_start();
                $_SESSION['usuario'] = $usuario;
                header("Location: jogo.php");
            }else{
                return "Senha incorreta.";
            }
        }
    }

    return "Usuario incorreto.";
}

function CarregaPergunta($id){
    $listaDePerguntas = json_decode(file_get_contents("perguntas.json"));

    return new Pergunta($listaDePerguntas[$id]->Pergunta, $listaDePerguntas[$id]->Respostas, $listaDePerguntas[$id]->Gabarito);
}

function Perguntar($id, $pergunta){
    echo "<form action='jogo.php' method='post'>";
    echo "<input type=hidden value='{$id}' name='pergunta'><p>{$pergunta->pergunta}</p>";

    for($i = 0; $i <= 3; $i++){
        echo "<input type=radio value='{$i}' name='resposta'><label>{$pergunta->respostas[$i]}</label></input><br>";
    }

    echo "<input type=hidden value='{$pergunta->gabarito}' name='gabarito'><br>";
    echo "<input type=submit></form>";
}

function Ganhou(){
    echo "<h2>Voce Ganhou!!!</h2>";
    echo "<p>Você acertou todas as perguntas!</p>";

    echo "<form action='jogo.php' method='post'>";
    echo "<input type=submit name='voltar' value='Voltar'></form>";
}

function Perdeu(){
    echo "<h2>Voce Perdeu...</h2>";
    echo "<p>Você acertou {$_POST['pergunta']} pergunta(s).</p>";

    echo "<form action='jogo.php' method='post'>";
    echo "<input type=submit name='voltar' value='Voltar'></form>";
}

?>