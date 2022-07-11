<?php
$now = date("d/m/y H/m/s", time());
?>
<?php
$login = $_GET["login"];
if($login == "admin"){
    echo "Pimba adminn";
}
else{echo "inferior";}
echo "<br>";
$arrayDeNumeros = array (1,2,3,4,5,6,7);
foreach ($arrayDeNumeros as $indice => $valorIndividual){
    echo "$valoresIndividuais" ;
    echo "+";
    echo "$indice";
    echo "<br>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entenda</title>
</head>
<body>
    <h1>Entenda Man PHP !!!</h1>
    <p>
       <?php echo  "Agora são $now " ?>
    </p>

</body>
</html>