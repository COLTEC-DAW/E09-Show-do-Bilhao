<?php ob_start();
    session_start();
    $nome= $_POST["login"];
    $senha =  $_POST["senha"];
    
    require 'arquivos.inc';
    require 'classes.php';
    $users = decodeuser();
    $usuarios = [];
        
    $userqtd = Count($users);
    for($i=0;$i<$userqtd;$i++){
        $user = new User($users[$i]->nome,$users[$i]->email,$users[$i]->login,$users[$i]->senha);
        array_push($usuarios,$user);
    }


    if(empty($nome) || empty($senha)){
        header("location: index.php?id=404");
    }
    
    else{
        if(verificalogin("login",$usuarios,$nome) != -1){ //login tá certo?
            $id = verificalogin("login",$usuarios,$nome);
            if(verificasenha($usuarios,$id,$senha)){  //senha tá certa?
                if (isset($_SESSION['usuario'])) {
                    header("location: inicio.php");
                } else {
                    $_SESSION['usuario'] = $nome;
                    $_SESSION['senha'] = $senha;
                    setcookie("pontos", 0);
                    date_default_timezone_set('America/Sao_Paulo');
                    setcookie("data", date("d/m/Y"));
                    header("location: inicio.php");
                }
            }
            
            else{
                echo 'SENHA INCORRETA MERMAO';
            }
        }
        else{
            echo 'NÃO EXISTE O LOGIN NAO MERMAO';
        }
        
    }
?>