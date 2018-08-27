<?php function carregaPerguntas($id){
    $enunciados = array (0 => "Enunciado 1", 1 => "Enunciado 2", 2 => "Enunciado 3", 3 => "Enunciado 4" );
    $alternativas =  array (0 => array (0 => "Alternativa 1A", 1 => "Alternativa 1B", 2 => "Alternativa 1C", 3 => "Alternativa 1D" ),
                            1 => array (0 => "Alternativa 2A", 1 => "Alternativa 2B", 2 => "Alternativa 2C", 3 => "Alternativa 2D" ),
                            2 => array (0 => "Alternativa 3A", 1 => "Alternativa 3B", 2 => "Alternativa 3C", 3 => "Alternativa 3D" ),
                            3 => array (0 => "Alternativa 4A", 1 => "Alternativa 4B", 2 => "Alternativa 4C", 3 => "Alternativa 4D" ));

    $alternativaCorreta = array (0 => "C", 1 => "B", 2 => "D", 3 => "A");
    ?>
    <div class="card">
        <h2 class="card-header"><?php echo $enunciados[$id];?></h2>
            <div class="card-body">
                <form>
                    <div class="radio">
                        <label><input type="radio" name="optradio"><?php echo $alternativas[$id][0]; ?></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio"><?php echo $alternativas[$id][1]; ?></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio"><?php echo $alternativas[$id][2]; ?></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio"><?php echo $alternativas[$id][3]; ?></label>
                    </div>
                </form>
            </div>
        </div>
<?php  }?>
