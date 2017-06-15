 <?php
 $nome = $_COOKIE['nome']; 
 autenticar($nome);
 function autenticar ($nome) {
 
  if (!isset($nome)) {
   echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
    session_destroy();
    exit;
  } else {
      
    echo "<p>Olá, $nome.</p>";
 
  }
}
?>
 
 <?php 
    $perg = $_POST["num"]; 
    $id = (int)$perg; 
    $resp = $_POST["alternativas"];
   

    

     $respostas[0] = 3;
     $respostas[1] = 2;
     $respostas[2] = 1;
     $respostas[3] = 1;
     $respostas[4] = 2;
 
  
      global $respostas; 
      
    if($respostas[$perg]==$resp){
      echo "Você acertou ";
      echo $id+1;
      echo " de 5 perguntas"; 
      $pontos = ($id+1) * 200000; 
      echo "<br>";
      echo "Você tem ";
      echo $pontos;
      echo " se deseja tentar ganhar mais 200 mil, vá para a próxima pergunta";
      echo "<br>"; 
      $prox = '<a href="perguntas.php?'; 
        echo $prox . str_replace("0",$id+1,'id=0"') . '>Próxima Pergunta</a>' . '</br>';
    }
    else {
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=fim.php'>";
    }
  
  ?> 