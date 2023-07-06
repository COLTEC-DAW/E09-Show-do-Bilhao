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

    // Aumenta a pontuação máxima caso tenha atingido um novo máximo
    function atualizaPontuacaoMaxima(stdClass $usuario,int $novaPontuacao) {
        if($usuario->pontuacaoMaxima < $novaPontuacao) 
            $usuario->pontuacaoMaxima = $novaPontuacao;
    }
    
    // Pega o array de usuários
    function getUsuarios() {
        $nomeArquivo = "usuarios.json";
        $arquivo = fopen ($nomeArquivo, "r+");

        $arrayUsuarios = json_decode(fread($arquivo, filesize($nomeArquivo)));

        fclose($arquivo);
        return $arrayUsuarios;
    }

    // Procura se exiate um usuário com o login especificado
    function procuraLogin(string $login) {
        $arrayUsuarios = getUsuarios();

        foreach($arrayUsuarios as $usuarioAtual) {
            if (($usuarioAtual->nome == $login)) {
                return $usuarioAtual;
            }
        }

        return false;
    }

    // Procura um usuário com um login e senha específicos
    function procuraUsuario() {
        $usuarioEncontrado = procuraLogin($_POST['nomeLogin']);

        if ($usuarioEncontrado->senha == $_POST['senhaLogin']) {
            return $usuarioEncontrado;
        }
        else return false;
    }

    // Cria ou atualiza o cookie de um usuário
    function atualizaCookiePontuacaoMaxima() {
        setcookie($_SESSION['loginAtual']->nome . "PontuacaoMaxima", $_SESSION['loginAtual']->pontuacaoMaxima, time() + TEMPO_DIA * 30, '/');
    }

    function atualizaCookieUltimaPontuacao(int $novaPontuacao) {
        setcookie($_SESSION['loginAtual']->nome . "UltimaPontuacao", $novaPontuacao, time() + TEMPO_DIA * 30, '/');
    }

    function atualizaCookieUltimoHorario() {
        setcookie($_SESSION['loginAtual']->nome . "UltimoHorario", time(), time() + TEMPO_DIA * 30, '/');
    }

    function getPontuacaoMaxima() {
        return $_SESSION['loginAtual']->pontuacaoMaxima;
    }

    function getUltimaPontuacao() {
        if (isset($_COOKIE[$_SESSION['loginAtual']->nome . "UltimaPontuacao"]))
            return $_COOKIE[$_SESSION['loginAtual']->nome . "UltimaPontuacao"];
        else
            return "[Sem dados]";
    }

    function getUltimoHorario() {
        if (isset($_COOKIE[$_SESSION['loginAtual']->nome . "UltimoHorario"]))
            return date('d/m/Y', $_COOKIE[$_SESSION['loginAtual']->nome . "UltimoHorario"]);
        else
            return "[Sem dados]";
    }

    // Cria um usuário e registra ele no arquivo usuarios.json
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

    // Dá o login com um usuário e cria o cookie dele
    function entraUsuario() {
        $usuarioEncontrado = procuraUsuario();
    
        if ($usuarioEncontrado) {
            $_SESSION['loginAtual'] = $usuarioEncontrado;
            atualizaCookiePontuacaoMaxima();

            header ("Location:index.php?id=0");
        }
        else {
            echo "<br/><p class='mensagem-erro'>Usuário ou senha incorretos!</p>";
        }
    }

    // Atualiza a pontuação máxima dos usuários do arquivo
    function atualizaArquivoUsuario() {
        $usuarios = getUsuarios();

        foreach($usuarios as $u) {
            if ($u->pontuacaoMaxima != $_COOKIE[$u->nome . "PontuacaoMaxima"]) {
                $u->pontuacaoMaxima = $_COOKIE[$u->nome . "PontuacaoMaxima"];
            }
        }

        $arquivo = fopen("usuarios.json", "w");

        fwrite($arquivo, json_encode($usuarios));
        fclose($arquivo);
    }

    // Sai do usuário atual
    function logoutUsuario() {
        unset($_SESSION['loginAtual']);
    }
?>