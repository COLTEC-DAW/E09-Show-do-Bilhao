<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prova de Conceito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 
    <form>

        <?php           
            $perguntas[] = "Primeira pergunta";
            $perguntas[] = "Segunda pergunta";
            $perguntas[] = "Terceira pergunta";
            $perguntas[] = "Quarta pergunta";
            $perguntas[] = "Quinta pergunta";
            
            $certas[] = [1, 1, 3, 2, 0];
            
            $alternativas[0] = array("Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4");
            $alternativas[1] = array("Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4");
            $alternativas[2] = array("Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4");
            $alternativas[3] = array("Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4");
            $alternativas[4] = array("Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4");
            $indice = 0;
            foreach($perguntas as $pergunta){
                echo "<div class=\"pergunta\">                    
                <h3>$pergunta</h3>";
               foreach($alternativas[$indice] as $alternativa){
                    echo "<div class=\"form-check\">
                        <input class=\"form-check-input\" id=\"Check$indice\" type=\"radio\" name=\"pergunta$indice\">
                        <label class=\"form-check-label\" for=\"Check$indice\">$alternativa</label>
                    </div>";
                }
                $indice++;
            }
        ?>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>