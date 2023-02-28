<?php
class Connection {
    private static $connection = null;    
    private function __construct() {
    }
    static public final function getInstance() {
        if (is_null(self::$connection)){
            try {
              self::$connection=new PDO('mysql:host=localhost;dbname=guide','root','', array(
                     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_CASE => PDO::CASE_NATURAL,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"                    ));
            }
             catch(PDOException $e) {
                    die("Database connection failed: " . $e->getMessage());
               // echo "erreur connexion";  
            }
        }   
        return self::$connection;     
    } 
   }