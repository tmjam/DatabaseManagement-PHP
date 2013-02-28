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
    public $database_handle = null;
    
    // <editor-fold defaultstate="collapsed" desc="Connection Manager">
    
    private function initConnection()
    {
        if($this->database_handle != null)
            return $this->database_handle;
        
        // Create a persistent DB connection which will cache and reuse connection open.
        /*self::$database_handle = new PDO('mysql:host='.config::$DATABASE_HOST.';dbname='.config::$DATABASE_NAME.'',config::$DATABASE_USER,config::$DATABASE_PASSWORD,array(
                 PDO::ATTR_PERSISTENT => true
            ));*/
        
         try {
             
            $this->database_handle = new PDO("sqlite:database/database.db",config::$DATABASE_USER,config::$DATABASE_PASSWORD, NULL);
            
         }
         catch (Exception $ex)
         {
             echo "SQLITE EXCEPTION";
         }
        return $this->database_handle;
    }
    
    
    private function closeConnection(){
        if($this->database_handle != null)
            $this->database_handle = null;
    }
    // </editor-fold>
    
    //<editor-fold defaultstate="collapsed" desc="Constructor/Destructor" >
    
    public function __construct()
    {
        //instialize the connection on creating an instance
        $this->database_handle = $this->initConnection();
    }
    
    public function __destruct() 
    {
        //destroy the connection instance
        $this->closeConnection();
    }
    
    //</editor-fold>
    
    
    //<editor-fold defaultstate="collapsed" desc="CRUD t1" >
    
    public function InsertData(){
        try {
            echo "Inserting data";
            $count =$this->database_handle->exec("insert into t1 (data,num) values ('This is sample data',3);");
            echo $count;
        } 
        catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function GetData()
    {
            /*** The SQL SELECT statement ***/
        $sql = "SELECT * FROM t1";
        foreach ($this->database_handle->query($sql) as $row)
            {
                print_r($row);
            }
    }
    
    //</editor-fold>
}
?>
