<?php

class Dbh {
    private static $dbtype = "mysql";
    private static $dbname = "5e_character_manager";
    private static $username = "root";
    private static $password = "";
    private static $host = "localhost";

    
    protected static function connect() {
	$dsn = self::$dbtype . ":host=" . self::$host . ";dbname=" . self::$dbname;
	$conn = new PDO($dsn, self::$username, self::$password);
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	return $conn;
    }
}

?>
