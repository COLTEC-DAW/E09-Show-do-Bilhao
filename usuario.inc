<?php
    define("TEMPO_DIA", 60 * 60 * 24);
    
    class usuario {
        public $nomeReal;
        public $senha;
        public $email;
        public $nome;
        public $pontuacaoMaxima;

        public function __construct(string $nomeReal, string $senha, string $email, string $nome) {
            $this->nomeReal = $nomeReal;
            $this->senha = $senha;
            $this->email = $email;
            $this->nome = $nome;
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

    function procuraLogin(string $login) {
        $arrayUsuarios = getUsuarios();

        foreach($arrayUsuarios as $usuarioAtual) {
            if (($usuarioAtual->nome == $login)) {
                return $usuarioAtual;
            }
        }

        return false;
    }

    function procuraUsuario() {
        $usuarioEncontrado = procuraLogin($_POST['nomeLogin']);

        if ($usuarioEncontrado->senha == $_POST['senhaLogin']) {
            return $usuarioEncontrado;
        }
        else return false;
    }

    function atualizaCookieUsuario() {
        setcookie($_SESSION['loginAtual']->nome, $_SESSION['loginAtual']->pontuacaoMaxima, time() + TEMPO_DIA * 30, '/');
    }

    function registraUsuario() {
        if(filesize('usuarios.json') && procuraLogin($_POST['nomeRegistro'])) {
            echo "<br/><p class='mensagem-erro'>Já existe um usuário com esse nome de login!</p>";
            return false;
        }

        $arquivo = fopen("usuarios.json", "r+");
        $novoUsuario = new usuario($_POST['nomeRealRegistro'], $_POST['senhaRegistro'], $_POST['email'], $_POST['nomeRegistro']);

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
            echo "<br/><p class='mensagem-erro'>Usuário ou senha incorretos!</p>";
        }
    }

    function atualizaArquivoUsuario() {
        $usuarios = getUsuarios();

        foreach($usuarios as $u) {
            if ($u->pontuacaoMaxima != $_COOKIE[$u->nome]) {
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