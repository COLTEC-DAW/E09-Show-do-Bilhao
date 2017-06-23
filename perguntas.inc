<?php

    require 'classe.php';

    function armazenaClasses($id){

        $cont = 0;

        $arquivo = fopen("perguntas.json", "r");
        while(!feof($arquivo))
        {
            $linha = fgets($arquivo);
            if($linha!=null){
                if($cont==$id)
                {
                    $aux = json_decode($linha);
                    $enunciado = $aux->{'enunciado'};
                    $alternativas = $aux->{'alternativas'};
                    $resp = $aux->{'resposta'};
                    $questao = new Questao($enunciado, $alternativas, $resp);
                    return $questao;
                }
                $cont++;
            }
        }
        fclose($arquivo);
    }

    ob_start();
    session_start();

    $permissao = 0;

    $login = $_SESSION["login"];
    $senha = $_SESSION["senha"];

        $arquivo = fopen("usuarios.json", "r");
        while(!feof($arquivo)) {
            $linha = fgets($arquivo);
            if($linha!=null)
            {
                $aux = json_decode($linha);
                $login_arq = $aux->{'Login'};
                if($login_arq == $login){
                    $senha_arq = $aux->{'Senha'};
                    if($senha_arq == $senha){
                        $permissao = 1;
                    }
                }
            }
        }
        fclose($arquivo);

        if ($permissao == 0)
        {
            $redirect = "login.php";
            header("location:$redirect");
        }
    ?>

<?php

    $pontuacao = $_GET["id"];

    if(isset($_COOKIE["ultima_pontuacao"]))
    {
        echo '<h3>Ultima pontuação: '.$_COOKIE['ultima_pontuacao'].'</h3>';
        echo '<h3>Jogou pela ultima vez '.$_COOKIE['data'].'</h3>';
    }
    else{
        echo '<h3>Ultima pontuação: 0</h3>';
    }
?>

<?php

    function carregaPerguntas($id)
    {

        global $per;
        global $alternativa;
        echo "<br>";
        echo $per[(int)$id];
        echo "<br>";
        echo "<br>";

?>
        <form name="questionario" action="respostas.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="radio" name="alternativa" value="0"><?php echo $alternativa[$id][0]; ?></label>
            <input type="radio" name="alternativa" value="1"><?php echo $alternativa[$id][1]; ?></label>
            <input type="radio" name="alternativa" value="2"><?php echo $alternativa[$id][2]; ?></label>
            <input type="radio" name="alternativa" value="3"><?php echo $alternativa[$id][3]; ?></label>
            <br>
            <br>
            <input type="submit" value="Próxima" class="btn">
        </form>
        <br>
        <br>
        <p>Você acertou <?php echo $id; ?> respostas.</p>
        <a href = "logout.php"><button>Fazer logout</button></a>
<?php
    }

        $per[0] = '1 - O que o Brasil será em 2018?';
        $alternativa[0][0] = 'a. Penta';
        $alternativa[0][1] = 'b. Hexa';
        $alternativa[0][2] = 'c. Comunista';
        $alternativa[0][3] = 'd. Octa';
        

        $per[1] = '2 - Qual o nome do mascote do Brasil nas copas?';
        $alternativa[1][0] = 'a. Leãozinho';
        $alternativa[1][1] = 'b. Canarinho putasso';
        $alternativa[1][2] = 'c. Gatinho';
        $alternativa[1][3] = 'd. Matadorzinho de alemão';
        

        $per[2] = '3 - Quem é o melhor jogador do mundo atualmente? (sem clubismo)';
        $alternativa[2][0] = 'a. Messi';
        $alternativa[2][1] = 'b. CR7';
        $alternativa[2][2] = 'c. Valdívia poko pika';
        $alternativa[2][3] = 'd. Suárez';
        

        $per[3] = '4 - Quem o Brasil tá mais com sangue no zói pra destruir em 2018?';
        $alternativa[3][0] = 'a. Itália';
        $alternativa[3][1] = 'b. França';
        $alternativa[3][2] = 'c. Alemanha';
        $alternativa[3][3] = 'd. Canadá';
        

        $per[4] = '5 - Qual o nome do jogador mais humilde das olimpíadas de 2016?';
        $alternativa[4][0] = 'a. Neymar';
        $alternativa[4][1] = 'b. Rodrigo Caio';
        $alternativa[4][2] = 'c. Luan';
        $alternativa[4][3] = 'd. Glória, glória, Gabriel Jesus (esse)';
        
        $resposta[0] = 0;
        $resposta[1] = 1;
        $resposta[2] = 2;
        $resposta[3] = 2;
        $resposta[4] = 3;

?>

<?php
    function pedeArquivo($id,$dados)
    {
        echo "<h3>".$dados->enunciado."</h3>";  
        echo '<form action="respostas.php" method="post">';
        
?>
        <input type="hidden" name="ids" value=<?=$id?>>
        <input type="hidden" name="certa" value=<?=$dados->resposta?>>
<?php                   
        for($i=0;$i<4;$i++)
        {
?>          
            <div class="radio">                                          
                <label><input type="radio" name="optradio" value="<?=$i?>"><?=$dados->alternativas[$i]?></label>
            </div>

<?php
        }
?>
    <input type="submit" name="Verificar">
    </form>

    <p>Você acertou <?php echo $id; ?> respostas.</p>
    <a href = "logout.php"><button>Fazer logout</button></a>
<?php
    }
?>