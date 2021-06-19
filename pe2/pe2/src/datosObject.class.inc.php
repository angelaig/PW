<?php

include 'configuracion.inc.php';

abstract class DataObject {
    
    protected $data= array();
  
    public function __construct($data) {
        foreach($data as $key => $value){
            if (array_key_exists($key, $this->data)) $this->data[$key] = $value; 
        }
    }

    public function getField($key) {
        if (array_key_exists($key, $this->data)) return $this->data[$key];
        else die ("Field not found");
    }

    protected static function connect() {

       
        try {
            $connection = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
            $connection->query('SET NAMES utf8');
            $connection->setAttribute(PDO::ATTR_PERSISTENT, true);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die ("Failed connection : ".$e->getMessage());
        }

        return $connection;
    }

    protected static function disconnect($connection) {
        $connection = null;
    }
}

?>




