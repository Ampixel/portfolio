<?php 
//CONNECTION

class Connection
{

    private static $dbHost = "localhost";
    private static $dbName = "portfolio";
    private static $dbUser = "root";
    private static $dbUserMdp = "root";

    private static $connection = null;

    public static function connect()
    {
        try {
            self::$connection = new PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbName.";charset=utf8", self::$dbUser, self::$dbUserMdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $e) {
            die('Erreur : '.$e->getMessage());
        }
        return self::$connection;
    }

    public static function disconnect(){
        self::$connection = null;
    }
}

Connection::connect(); 

?>
