<?php
class ConnexionBD
{
    private static $_dbname = 'babel' ;
    private static $_host = '127.0.0.1' ;
    private static $_user = 'root';
    private static $_pwd = '';
     
private static $_bdd= null; 
private function __construct() { 
try{ self::$_bdd= new PDO("mysql:host=" . self::$_host . ";dbname=" .self::$_dbname. ";charset=utf8", self::$_user); 
} 
catch (PDOException$e) { die('Erreur : ' . $e->getMessage()); } 
} 
public static function getInstance() { 
if (!self::$_bdd){ 
new ConnexionBD(); 
return (self::$_bdd); }
return (self::$_bdd); 
} }

?>