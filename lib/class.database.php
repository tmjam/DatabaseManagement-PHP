<?php

/* ******************************************
    Document   : PDO Database management
    Created on : February 9, 2013, 10:08 AM
    Author     : Tauseef Jamadar
    Description:
        Database management class using PDO.
*********************************************/


require_once ('class.config.php');

class database {
    
    //create a database handle
    public static $database_handle = null;
    
    
    private function getConnection()
    {
        if(self::$database_handle != null)
            return self::$database_handle;
        
        // Create a persistent DB connection which will cache and reuse connection open.
        self::$database_handle = new PDO('mysql:host='.config::$DATABASE_HOST.';dbname='.config::$DATABASE_NAME.'',config::$DATABASE_USER,config::$DATABASE_PASSWOR,array(
                 PDO::ATTR_PERSISTENT => true
            ));
        return self::$database_handle;
    }
    
    private function closeConnection(){
        if(self::$database_handle != null)
            self::$database_handle = null;
    }
    
    public function __construct()
    {
        //instialize the connection on creating an instance
        $this->getConnection();
    }
    
    public function __destruct() 
    {
        //destroy the connection instance
        $this->closeConnection();
    }
    
}
?>
