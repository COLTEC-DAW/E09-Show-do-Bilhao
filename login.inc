<?php
    function procura_usuario(){
         $arquivo_usuarios= 'users.txt';
         $result;
         $tmp;
        if(file_exists($arquivo_usuarios)){
                $abertura_arquivo_usuarios = fopen($arquivo_usuarios, "r");           
                if(filesize($arquivo_usuarios)>0){
                    while(!feof($abertura_arquivo_usuarios)){
                        $linha = fgets($abertura_arquivo_usuarios); 
                        $linha= str_replace(array("[", "]"), '', $linha);  
                        $linha = substr($linha,0,-2);   
                        $decoded_json = json_decode($linha, false);  
                        if($decoded_json->login==$_POST["login"] && $decoded_json->senha==$_POST["senha"]){
                            $_SESSION["name"] = $decoded_json->name;
                            $_SESSION["email"] = $decoded_json->email;
                            $_SESSION["login"] = $decoded_json->login;
                            $_SESSION["senha"] = $decoded_json->senha;
                            $_SESSION["verifica"] = $decoded_json->verifica;
                            $_SESSION["tag"] = session_id();
                            fclose($abertura_arquivo_usuarios);
                            session_start();
                            return true;
                        }
                    }  
                        
                }    
                fclose($abertura_arquivo_usuarios);               
            }
              return false;
            
     }
    function obtem_conteudo(){
         $arquivo_usuarios= 'users.txt';
         $result;
        if ( file_exists($arquivo_usuarios)){
                $abertura_arquivo_usuarios = fopen($arquivo_usuarios, "r+");
                $ler_usuario;            
                if(filesize($arquivo_usuarios)>0){
                    $result= file_get_contents("users.txt");;
                    $result= str_replace(array("[", "]"), '', $result);                
                }    
                fclose($abertura_arquivo_usuarios);
               
        }
        return $result;
    }
    function escreve_usuario(){
        $arquivo_usuarios= 'users.txt';
        if ( file_exists( $arquivo_usuarios)) {
                    $conteudo=obtem_conteudo();
                    $abertura_arquivo_usuarios = fopen($arquivo_usuarios, "w+");
                    $tmp=$_SESSION;
                    $tmp2 = json_encode($tmp);
                    $tmp2 ='['.$conteudo. $tmp2.',]'."\n";                
                    fwrite($abertura_arquivo_usuarios, $tmp2);
                    print_r ($tmp2);
                    fclose($abertura_arquivo_usuarios);
                                    
         }else{
             $cria=fopen($arquivo_usuarios, "x");
             fclose($cria);
             escreve_usuario();
         }
    }  
?>             
