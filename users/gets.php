<?php
    function getFoto($login){
        $stored_users = file_get_contents("../users/Usuarios.json");
        $users = json_decode($stored_users, true);

        for ($i=0; $i < count($users); $i++) {
			if($users[$i]['login'] == $login){
                return $users[$i]['foto'];
			}
		}
        return "0";
    }

    function getHighscore($login){
        $stored_users = file_get_contents("../users/Usuarios.json");
        $users = json_decode($stored_users, true);

        for ($i=0; $i < count($users); $i++) {
			if($users[$i]['login'] == $login){
                return $users[$i]['highscore'];
			}
		}
        return "0";
    }
?>