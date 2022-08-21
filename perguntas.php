<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--CSS-->
  <link rel="stylesheet" href="style.css"/>
  
  <title>teste do show do bilhao</title>
</head>
<body>
<?php
  
  /*-------Variáveis-------*/
  //Recebendo parâmetros por requisição
  $perguntaAtual = $_GET['id'] - 1;

  //Arrays que armazenam as perguntas e alternativas
  $perguntasGlobal = [];
  $altenativasGlobal = [];
  $gabaritoGlobal = [];
  $numPerguntas = 0;

  /*-------Funções--------*/
  //Função que adiciona as perguntas nos vetores
  function adicionaPergunta($pergunta, $alternativas, $gabarito){
    global $perguntasGlobal;
    global $alternativasGlobal;
    global $gabaritoGlobal;
    global $numPerguntas;

    $perguntasGlobal[] = $pergunta;
    $alternativasGlobal[] = $alternativas;
    $gabaritoGlobal[] = $gabarito; 
    $numPerguntas++;
  }

  //função que carrega perguntas
  function carregaPergunta($id){
    global $perguntasGlobal;
    global $alternativasGlobal;
    
    echo "<div class=\"pergunta\">
      <h1>$perguntasGlobal[$id]</h3>;
    </div>";
    echo "<form>";
    echo "<div class=\"alternativas\">";
    foreach ($alternativasGlobal[$id] as $alternativa){
      echo "<div class=\"alternativa\">
        <input type=\"radio\" name=\"alternativa\">$alternativa</h3>
      </div>";
    }
    echo "<br>";
    echo "</div>";
    echo "<div class=\"submeter\">";
    echo "<input type=\"submit\" id=\"responder\" name=\"enviar\" class=\"submeterBotao\">";
    echo "</div>";
    echo "</form>";
  }
  
  /*-------Chamadas-------*/
  //Adicionando perguntas
  adicionaPergunta("Qual bicho transmite doença de Chagas?", ["Abelha", "Barata", "Pulga", "Barbeiro"], 3);
  adicionaPergunta("Qual fruto é conhecido no Norte e Nordeste como \"jerimun\"?", ["Caju", "Abóbora", "Chuchu", "Côco"], 1);
  adicionaPergunta("Qual é o coletivo de cães?", ["Matilha", "Rebanho", "Alcateia", "Manada"], 0);
  adicionaPergunta("Qual é o triângulo que tem todos os lados diferentes?", ["Equilátero", "Isósceles", "Escaleno", "Trapézio"], 2);
  adicionaPergunta("Quem compôs o hino da independência?", ["Dom Pedro I.", "Manuel Bandeira", "Castro Alvez", "Carlos Gomes"], 0);

  //Carregando perguntas
  carregaPergunta($perguntaAtual);
?>
</body>
</html>