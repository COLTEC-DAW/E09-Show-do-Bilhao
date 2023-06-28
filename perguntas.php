<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo do bilhão</title>
</head>
<body>
    
</body>
</html>

    <?php
    //chama o arquivo perguntas.inc, so roda o site se ele existir 
    require 'perguntas.inc';

    //pega o id e armazena ele na posição id, isset verficia se o ide existe, e se ele existir retorna true, e o id é pego e armazenado em id, caso issso não aconteça ele armazena 1
    $id = isset($_GET['id']) ? $_GET['id'] : 1;

    //classe questões 
    class questions {
        public string $enunciado;
        public $questões;
        public string $questaocerta;

        //método construtor das questões 
        public function __construct($enunciado,$alternativaA,$alternativaB,$alternativaC,$alternativaD,$questaocerta){
            $this->enunciado=$enunciado;
            // declara o array questões, separando as alternativas 4 
            $this->questões=array(1=> $alternativaA,2=> $alternativaB, 3=> $alternativaC,4=>$alternativaD,);
            $this->questaocerta=$questaocerta;
        }

        // Função que imprime as questões
        public function MostraQuestões($numero){
        echo"<br> questão: ".$numero."<br>";
            echo ($this->enunciado."<br>");
            //armazena cada posição de questões na variavel questão
            foreach($this->questões as $questao){
                echo $questao."<br>";
            }
            //imprime a alternativa certa 
            echo ("a alternativa certa é a:" .$this->questaocerta."<br>");  
         } 
    }
    //carrega a função menu 
    require 'menu.inc';

    //cria a variavel pergunta e chama para ela a função carregaPergunta (presente em perguntas.inc) essa função retorna uma pergunta de acordo com o id 
    $pergunta=carregaPergunta($id);

$total_perguntas = count($perguntas);
$id = isset($_GET['id']) ? $_GET['id'] : 1;

if ($id <= $total_perguntas) {
    $pergunta_atual = $perguntas[$id];
    
    echo '<h1>Pergunta ' . $id . '</h1>';
    echo '<p>' . $pergunta_atual['pergunta'] . '</p>';
    
    // Verifica se foi submetida uma resposta
    if (isset($_POST['resposta'])) {
        $resposta = $_POST['resposta'];
        
        // Verifica se a resposta está correta
        if ($resposta == $pergunta_atual['resposta_correta']) {
            echo '<p>Resposta correta!</p>';
            
            // Incrementa o ID para carregar a próxima pergunta
            $proximo_id = $id + 1;
            if ($proximo_id <= $total_perguntas) {
                echo '<a href="?id=' . $proximo_id . '">Próxima pergunta</a>';
            } else {
                echo '<p>Parabéns! Você respondeu todas as perguntas.</p>';
            }
        } else {
            echo '<p>Resposta incorreta!</p>';
        }
    } else {
        // Formulário para submeter a resposta
        echo '<form method="POST" action="">';
        echo '<input type="text" name="resposta" placeholder="Digite sua resposta">';
        echo '<input type="submit" value="Enviar">';
        echo '</form>';
    }
} else {
    echo '<p>Pergunta inválida!</p>';
}
    //iprime as perguntas
    if ($pergunta) {
        $pergunta->MostraQuestões($id);
    } else {
        echo "Pergunta não encontrada.";
    }

    //chama o arquivo, mas se ele não existir o código roda independentemente
    include 'rodape.inc';

    ?>  
</body>
</html>
