<?php
  
  //Recebendo parâmetros por requisição
  $perguntaAtual = $_GET['id'];

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--CSS-->
  <link rel="stylesheet" type="text/css" href="style.css"/>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <title>Show do Bilhão</title>
</head>
<body>
  
  <div class="align-content-center">
    <h1>Show do Bilhao</h1>
  </div>

  <!--Adicionando perguntas-->
  <?php

  ?>

  <div class="justify-content-around">
    <button type="button">Anterior</button>  
    <button type="button">Proxima</button>
  </div>

  <!--Testes-->
  <?php

  ?>

  

</body>
</html>