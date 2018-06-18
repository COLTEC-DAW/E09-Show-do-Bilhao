<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>E09</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <h1 class="text-center">Prova de conceitos</h1>
      <?php
        $lorem = "Lorem ipsum dolor sit amet.";
        $enunciados = array($lorem, $lorem, $lorem, $lorem, $lorem);
        $alternativas = array(array($lorem, $lorem, $lorem, $lorem, $lorem), array($lorem, $lorem, $lorem, $lorem, $lorem), array($lorem, $lorem, $lorem, $lorem, $lorem), array($lorem, $lorem, $lorem, $lorem, $lorem), array($lorem, $lorem, $lorem, $lorem, $lorem));
        $respostas = array(0, 1, 2, 3, 4);
echo "
<ol>
";
        foreach ($enunciados as $key => $enunciado) {
echo "
  <li>
    <h4>$enunciado</h4><br>
    <ol>
";

            foreach ($alternativas[$key] as $key2 => $alternativa) {
echo "
      <li>
        <input type=\"radio\" name=\"$key\" id=\"$key$key2\"> $alternativa
      </li>
";
            }

echo "
    <br>
    </ol>
    </li>
";
        }
echo "
</ol>
  <button type=\"button\" id=\"botao\" class=\"btn btn-success\">Ver Respostas</button>
";
       ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
