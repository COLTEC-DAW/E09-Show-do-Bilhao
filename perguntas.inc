<?php
     $per[0] = "Q1. Quantos Oscares tem Leonardo Di Caprio?";
     $alt[0][0] = "Nenhum ";
     $alt[0][1] = "1";
     $alt[0][2] = "10";
     $alt[0][3] = "2";

     $per[1] = "Q2. Quem presidia o Brasil em 2001?";
     $alt[1][0] = "Lula";
     $alt[1][1] = "Itamar Franco";
     $alt[1][2] = "Silvio Santos";
     $alt[1][3] = "Fernando Henrique Cardoso";

     $per[2] = "Q3. A galinha usa saia e o galo?";
     $alt[2][0] = "Paletó";
     $alt[2][1] = "Meia";
     $alt[2][2] = "Samba-Canção";
     $alt[2][3] = "Gel capilar";

     $per[3] = "Q4. O que é mais rápido?";
     $alt[3][0] = "O Relâmpago Marquinhos";
     $alt[3][1] = "Flow do spirnardi";
     $alt[3][2] = "Luz";
     $alt[3][3] = "Asaian Bolt";

     $per[4] = "Q5. 'Danone' é o apelido usado para se referir a qual das seguintes bebidas populares?";
     $alt[4][0] = "Vitamina de Morango com Açai e Banana";
     $alt[4][1] = "Vodka Barata";
     $alt[4][2] = "Cerveja";
     $alt[4][3] = "Suco do Bandex";


     $respostas[0] = 1;
     $respostas[1] = 3;
     $respostas[2] = 0;
     $respostas[3] = 2;
     $respostas[4] = 2;

     function carregaPergunta($id){
		global $per;
		global $alt;
        $link = "perguntas.php?id=".$id;
        echo "<form action="perguntas.php">";
        echo "<h3>".$per[$id]."</h3>";
        for($i=0;$i<4;$i++){
            //$name = "op".$id.$i;
            echo '<input type="radio" name="'.$id.'">'.$alt[$id][$i].'<br>';           
		}
        echo '<input type="submit" value="Responder">';
        echo"</form>";
	}

?>