<?php
    session_start();
    $nome= $_POST["login"];
    $senha =  $_POST["senha"];
    
    require 'arquivos.inc';
    $usuarios = decodeuser();

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