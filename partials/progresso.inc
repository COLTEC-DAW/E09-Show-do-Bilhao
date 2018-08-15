<?php
    echo
    "<div class='row my-3'>
        <div class='col-2'>
            <div class='h5'>
                Cadastro
            </div>
            <div class='progress'>
                <div class='progress-bar bg-success' role='progressbar' style='width: $cadastro%;' aria-valuenow='$cadastro' aria-valuemin='0' aria-valuemax='100'></div>
            </div>
        </div>
        <div class='col-8'>
            <div class='h5'>
                Progresso no jogo
            </div>
            <div class='progress'>
                <div class='progress-bar bg-success' role='progressbar' style='width: $jogo%;' aria-valuenow='$jogo' aria-valuemin='0' aria-valuemax='100'></div>
            </div>
        </div>
        <div class='col-2'>
            <div class='h5'>
                Retire seu bilhao
            </div>
            <div class='progress'>
                <div class='progress-bar bg-success' role='progressbar' style='width: $premio;' aria-valuenow='$premio' aria-valuemin='0' aria-valuemax='100'></div>
            </div>
        </div>
    </div>";
?>
