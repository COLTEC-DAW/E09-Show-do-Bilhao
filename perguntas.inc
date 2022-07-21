<?php
  
  //Recebendo parâmetros por requisição
  $perguntaAtual = $_GET['id'] - 1;

  //Arrays que armazenam as perguntas e alternativas
  $perguntasGlobal = [];
  $altenativasGlobal = [];
  $gabaritoGlobal = [];
  $numPerguntas = 0;

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
  
  //Adicionando perguntas
  adicionaPergunta("Qual bicho transmite doença de Chagas?", ["Abelha", "Barata", "Pulga", "Barbeiro"], 3);
  adicionaPergunta("Qual fruto é conhecido no Norte e Nordeste como \"jerimun\"?", ["Caju", "Abóbora", "Chuchu", "Côco"], 1);
  adicionaPergunta("Qual é o coletivo de cães?", ["Matilha", "Rebanho", "Alcateia", "Manada"], 0);
  adicionaPergunta("Qual é o triângulo que tem todos os lados diferentes?", ["Equilátero", "Isósceles", "Escaleno", "Trapézio"], 2);
  adicionaPergunta("Quem compôs o hino da independência?", ["Dom Pedro I.", "Manuel Bandeira", "Castro Alvez", "Carlos Gomes"], 0);

  //função que carrega perguntas
  function carregaPergunta($id){
    global $perguntasGlobal;
    global $alternativasGlobal;
    
    echo "<div class=\"pergunta\">
      <h1>$perguntasGlobal[$id]</h3>;
    </div>";
    echo "<div class=\"alternativas\">
      ";
    foreach ($alternativasGlobal[$id] as $alternativa){
      echo "<div class=\"alternativa\">
        <h3>$alternativa</h3>
      </div>";
    }
    echo "</div>";
  }


  carregaPergunta($perguntaAtual);
?>