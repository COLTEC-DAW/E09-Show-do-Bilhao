<?php
    global $check;
    global $pont;
    $id = $_POST['ident'];
    $check = $_POST['resp'];

    if($check==$_POST['alter']){
        $id += 1;
        header("Location: /?id=$id ");
    }
    else{
        header("Location: Errou.php ");
    }
    echo $_POST['alter'];


?>