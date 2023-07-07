<div class="header">

    <div class="titulo">
        <h1>SHOW DO BILHAO</h1>
    </div>

    <div class="containerItens">
        <div class="sair">
            <button onclick="window.location.href='../logout.php'">SAIR DO JOGO</button>
        </div>

        <div class="dadosTempo">
            <?php
            require_once 'functions.php';
            atualizarTempoJogado();
            if (isset($_SESSION['username']) && file_exists('temp/tempoUsers.json')) {
                $tempoUsers = json_decode(file_get_contents('temp/tempoUsers.json'), true);
                if (isset($tempoUsers[$_SESSION['username']])) {
                    $tempo_total = $tempoUsers[$_SESSION['username']];
                    $horas = floor($tempo_total / 3600);
                    $minutos = floor(($tempo_total % 3600) / 60);
                    $segundos = $tempo_total % 60;
                    echo "<p>Tempo jogado: $horas:$minutos:$segundos</p>";
                }
            }
            if (isset($_COOKIE['last_session'])) {
                $last_session = $_COOKIE['last_session'];
                echo "<p>Última vez que jogou: $last_session</p>";
            }        
            ?>
        </div>
        
        <div class="MaiorPontuacao">
            <?php        
            if (isset($_SESSION['username']) && file_exists('temp/usuarios.json')) {
                $usuarios = json_decode(file_get_contents('temp/usuarios.json'), true);
                if (isset($usuarios[$_SESSION['username']])) {
                    $maior_pontuacao = $usuarios[$_SESSION['username']]['maior_pontuacao'];
                    echo "<p>Maior pontuação: $maior_pontuacao</p>";
                }
            }
            ?>
        </div>

    </div>
</div>