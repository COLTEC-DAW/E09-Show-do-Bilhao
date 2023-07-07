<?php
require_once 'utils.inc';

class User
{


    private static function getAllUsers()
    {
        return (array) json_decode(file_get_contents(__DIR__ . "/../data/usuarios.json"), true);
    }

    public static function isLoginValid($username, $password)
    {
        $allUsers = User::getAllUsers();

        foreach ($allUsers as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }

        return false;
    }

    public static function createUser($name, $username, $email, $password)
    {
        $allUsers = User::getAllUsers();

        // Check if email or username is already used
        foreach ($allUsers as $user) {
            if ($user['email'] === $email || $user['username'] === $username) {
                return false;
            }
        }

        $newUser = array(
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => $password
        );

        $allUsers[] = $newUser;
        $jsonData = json_encode($allUsers, JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . "/../data/usuarios.json", $jsonData);

        createUserSession(new User($username, $email));

        return true;
    }

    public static function logout()
    {
        session_destroy();
    }


    public $username;
    public $email;


    function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

}
?>