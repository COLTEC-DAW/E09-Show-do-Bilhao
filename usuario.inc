<?php
    define("TEMPO_DIA", 60 * 60 * 24);
    
    class usuario {
        public $nome;
        public $senha;
        public $pontuacaoMaxima;

        public function __construct(string $nome, string $senha) {
            $this->nome = $nome;
            $this->senha = $senha;
            $this->pontuacaoMaxima = 0;
        }

    }
    function atualizaPontuacaoMaxima(stdClass $usuario,int $novaPontuacao) {
        if($usuario->pontuacaoMaxima < $novaPontuacao) 
            $usuario->pontuacaoMaxima = $novaPontuacao;
    }
    
    function getUsuarios() {
        $nomeArquivo = "usuarios.json";
        $arquivo = fopen ($nomeArquivo, "r+");

        $arrayUsuarios = json_decode(fread($arquivo, filesize($nomeArquivo)));

        fclose($arquivo);
        return $arrayUsuarios;
    }

    function procuraUsuario() {
        $arrayUsuarios = getUsuarios();

        foreach($arrayUsuarios as $usuarioAtual) {
            if (($usuarioAtual->nome == $_POST['nomeLogin']) && ($usuarioAtual->senha == $_POST['senhaLogin'])) {
                return $usuarioAtual;
            }
        }

        return false;
    }

    function atualizaCookieUsuario() {
        setcookie($_SESSION['loginAtual']->nome, $_SESSION['loginAtual']->pontuacaoMaxima, time() + TEMPO_DIA * 30, '/');
    }

    function registraUsuario() {
        $arquivo = fopen("usuarios.json", "r+");
        $novoUsuario = new usuario($_POST['nomeLogin'], $_POST['senhaLogin']);

        if (filesize("usuarios.json") == 0) {
            fwrite($arquivo, json_encode(array($novoUsuario)));
        }
        else {
            fseek($arquivo, -1, SEEK_END);
            fwrite($arquivo, ',' . json_encode($novoUsuario) . ']');
        }

        fclose($arquivo);
    }

    function entraUsuario() {
        $usuarioEncontrado = procuraUsuario();
    
        if ($usuarioEncontrado) {
            $_SESSION['loginAtual'] = $usuarioEncontrado;
            atualizaCookieUsuario();

            header ("Location:index.php?id=0");
        }
        else {
            echo "<br/>Usuário ou senha incorretos!";
        }
    }

    function atualizaArquivoUsuario() {
        $usuarios = getUsuarios();

        foreach($usuarios as $u) {
            if ($u->pontuacaoMaxima != $_COOKIE[$u->nome]) {
                echo "euhfueh";
                $u->pontuacaoMaxima = $_COOKIE[$u->nome];
            }
        }

        $arquivo = fopen("usuarios.json", "w");

        fwrite($arquivo, json_encode($usuarios));
        fclose($arquivo);
    }

    function logoutUsuario() {
        unset($_SESSION['loginAtual']);
    }
?>