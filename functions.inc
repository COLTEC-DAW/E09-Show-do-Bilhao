<?php
    ob_start();
    function carregaPergunta($id){
        organizaPergunta();
        global $alternativas, $perguntas, $respostas;
        if($id <= 4){
            $id_novo = $id+1;
            $alter = $alternativas[$id];
            echo "<h3>$id_novo) $perguntas[$id]</h3>";
            echo "<form action=\"checagem.php\" method=\"POST\">";
            echo "<input type=\"hidden\" name=\"pergunta\" value=\"$id\">";
            echo "<input type=\"hidden\" name=\"resposta\" value=\"$respostas[$id]\">";
            for($j = 0; $j < 4; $j++){
                echo "<input type=\"radio\" name=\"alternativa\" value=\"$j\">$alter[$j]</br>";
            }
            echo "<input type=\"submit\" value=\"Enviar\">";
        }
        else{
            date_default_timezone_set('America/Sao_Paulo');
            setcookie("tentativa", date("d/m/Y - H:i:s"));
            setcookie("pontos", $_COOKIE["pergunta"]);
            header("location: final.php");
        }
    }

    function decodifica($arquivo){
        $arq = fopen($arquivo, "r");
        $linha = "";
        while(!feof($arq)) {
            $linha .= fgets($arq);
        }
        fclose($arq);
        $decodificado = json_decode($linha);
        return $decodificado;
    }

    function codifica($string, $arquivo){
        $arq = fopen($arquivo, "w");
        fwrite($arq, json_encode($string, JSON_PRETTY_PRINT));
        fclose($arq);
    }

    function UserRepetido($dado, $usuarios, $campo){
        $length = count($usuarios);
        for($i = 0; $i < $length; $i++){
            if($usuarios[$i] -> $campo == $dado){
                return true;
            }
        }
        return false;
    }

    function organizaPergunta(){
        $array = decodifica("perguntas.json");
        global $perguntas;
        $perguntas = array();
        global $alternativas;
        $alternativas = array();
        global $respostas;
        $respostas = array();

        $length = count($array);
        for($i = 0; $i < $length; $i++){
            array_push($perguntas, $array[$i] -> {'pergunta'});
            array_push($alternativas, $array[$i] -> {'alternativas'});
            array_push($respostas, $array[$i] -> {'resposta'});
        }
    }
?>