<?php
    class usuario {
        public $nome;
        public $senha;

        public function __construct(string $nome, string $senha) {
            $this->nome = $nome;
            $this->senha = $senha;
        }
    }

    function registraUsuario() {
        $arquivo = fopen ("usuarios.json", "r+");
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

    function getUsuarios() {
        $arquivo = fopen ("usuarios.json", "r+");

        $arrayUsuarios = json_decode(fread($arquivo, filesize($arquivo)));

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
?>