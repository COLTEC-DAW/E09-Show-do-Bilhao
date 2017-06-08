<?php
 $data =date("d.m.y"); 
 setcookie("data", $data);
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

 $pts = $_COOKIE['pontos'] * 200000;

echo "A ultima vez que entrou foi " . $_COOKIE['data'];
echo "<br>";
echo "E sua pontuação foi " . $pts;
unset($_SESSION);
//unset($_COOKIE['nome']);


?>