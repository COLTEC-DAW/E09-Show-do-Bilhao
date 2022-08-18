function printaVetor($vetorAlvo, $id){
    for ($i = 0; $i <4; $i++){
        
        echo "<button>";
        echo ($vetorAlvo[$id][$i]);
        echo "<br>";
    }
}
function carregaPerguntaPeloId($id){
    $id = $_GET["id"];
    global $vetorEnunciados;
    global $vetorAlternativas;
    echo ($vetorEnunciados[$id]);
    echo "<br>";
    echo "<br>";
    printaVetor($vetorAlternativas, $id);
}