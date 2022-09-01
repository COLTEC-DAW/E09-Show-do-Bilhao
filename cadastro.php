<?php

   $users = @json_decode(file_get_contents('users.json'), true);
   if(!$users)
       $users = array();
       if (isset($_POST['user'])) {
           $users[] = $_POST['user'];

           $file = fopen('users.json', 'w');

           fwrite($file, json_encode($users));

           fclose($file);
       }

?>
<form action="" method="post">
   <input type="text" placeholder="Login" name="user[login]">
   <input type="password " placeholder="Senha" name="user[senha]">
   <input type="text" placeholder="Email" name="user[email]">
   <input type="text" placeholder="Nome" name="user[nome]">

   <input type="submit">
</form>

<a href="login.php">Login</a> 
