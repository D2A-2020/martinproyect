<?php 

class Connection extends PDO{

    const HOST = "db2";
    const DB = "martindb";
    const USER = "admin";
    const PASS = "admin";
    protected static $con;

    function __construct(){
    
        try{
            $this->con = new PDO("mysql:host=". self::HOST . ";dbname=". self::DB, self::USER, self::PASS);

        }catch(Exception $e){
            echo "Error al conectar con db\n";
            echo $e;
        }

    }

}
?>