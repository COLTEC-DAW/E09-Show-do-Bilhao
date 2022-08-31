<?php

  $perguntas = [
    "Quantos Grammy's tem a banda paramore?",
    "Quantos Grammy's tem a multipremiada e conceituada artista Melanie Martinez?",
    "Cabelo loiro é sinômimo do que na cultura popular?",
    "Olhos verdes indicam possíveis problemas:",
    "Qual a principal cidade do subúrbio subdesenvolvido de Belo Horizonte?"
  ];

  $respostas = array(
    array("0", "1", "10", "Não foram indicados"),
    array("10", "0", "13", "Além de seus vários Grammy's, Melanie Martinez também possui em sua estante um Oscar, um Tonny e um Emmy, classificando-a como uma artista que possui um EGOT"),
    array("Inteligência", "Bom gosto", "Felicidade", "Burrice"),
    array("Mentais", "Oftalmológicos", "Cognitivos", "Dermatológicos"),
    array("Gotham City", "Raposos", "Contagem", "Venda Nova")
  );
  
    $respostascorretas = [3, 3, 3, 1, 2];
    $keys = array_keys($respostas);

  function carregaPergunta($id){
    global $perguntas, $respostas, $respostascorretas;
    echo $perguntas[$id]."<br><br />"; 
    
    $increment = 0; 

    foreach($respostas[$id] as $elemento) { 
      if($increment == $respostascorretas[$id]) { 
        echo $elemento."<br>";
        $increment++; 
      } else { 
        echo $elemento."<br>"; 
        $increment++; 
        } 
    }

    echo "<br />";
  } 
?>
