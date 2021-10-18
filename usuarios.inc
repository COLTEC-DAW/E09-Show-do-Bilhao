<?php

class Usuario
{
    public string $name;
    public string $email;
    public string $username;
    public string $password;

    function __construct(string $name, string $email, string $username, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }
    
    public function Validar($username, $password)
    {
        return ($username == $this->username && $password == $this->password);
    }
}

class Usuarios
{
    private static array $users;
    private static string $USERS_FILE = "usuarios.json";

    private static function SyncUsuarios()
    {
        if (file_exists(self::$USERS_FILE))
        {
            self::$users = array();
            $usersAssociativeArray = json_decode(file_get_contents(self::$USERS_FILE), true);
            if (isset($usersAssociativeArray))
            {
                foreach ($usersAssociativeArray as $user)
                {
                    self::$users[$user['username']] = new Usuario($user['name'], $user['email'], $user['username'], $user['password']);
                }
            }
        }
    }

    private static function SyncArquivo()
    {
        if (unlink(self::$USERS_FILE) or fopen(self::$USERS_FILE, "x"))
        {
            file_put_contents(self::$USERS_FILE, json_encode(self::$users));
        }
    }

    public static function ValidaUser(string $username, string $password = null)
    {
        self::SyncUsuarios();
        return (isset(self::$users[$username]) && self::$users[$username]->Validar($username, $password));
    }

    public static function RegistraUser(string $name, string $email, string $username, string $password)
    {
        self::SyncUsuarios();
        if (!self::ValidaUser($username))
        {
            self::$users[$username] = new Usuario($name, $email, $username, $password);
            self::SyncArquivo();
        }
        else return false;

        return true;
    }
}

?>