<?php 

class Usuario{
    public $nomeUsuario;
    public $senhaUsuario;
    public $emailUsuario;
    public $loginUsuario;
    
    public function __construct($nomeUsuario, $emailUsuario, $loginUsuario, $senhaUsuario){
        $this->nomeUsuario = $nomeUsuario;
        $this->senhaUsuario = $senhaUsuario;
        $this->emailUsuario = $emailUsuario;
        $this->loginUsuario = $loginUsuario;
    }
}

function cadastraNovoUsuario($nomeUsuario, $emailUsuario, $loginUsuario, $senhaUsuario){

    $usuariosjson = file_get_contents('../data/usuarios.json');
    $usuarios = json_decode($usuariosjson);

    $user = new Usuario($nomeUsuario, $emailUsuario, $loginUsuario, $senhaUsuario);

    if($usuarios == null) {
        $usuarios = [$user];
    }else{
        array_push($usuarios, $user);
    }

    $usuariosjson = json_encode($usuarios);
    file_put_contents('../data/usuarios.json', $usuariosjson);
}
?>