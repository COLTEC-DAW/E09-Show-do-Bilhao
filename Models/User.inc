<?php 
class User{
    public $nome;
    public $senha;
    public $pontuacao;

    public function __construct($nome, $senha, $pontuacao){
        $this->nome = $nome;
        $this->senha = $senha;
        $this->pontuacao = $pontuacao;
    }
}

/*<?php
// envia os cookies
setcookie("cookie[tres]", "cookietres");
setcookie("cookie[dois]", "cookiedois);
setcookie("cookie[um]", "cookieum");

// Depois que a página recarregar, mostra eles
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $nome => $valor) {
        $nome = htmlspecialchars($nome);
        $valor = htmlspecialchars($valor);
        echo "$nome : $valor <br />\n";
    }
}
?>*/

function criaUsuarioECookie( $nome, $senha, $pontuacao){
    $usuario = new User($nome, $senha, $pontuacao);
    
    setcookie("usuario-{$nome}",json_encode($usuario),  time()+3600);
}

?>