<?php

include_once 'datosObject.class.inc.php';



class Item extends DataObject {

    protected $data = array( 
        "id" => null,
        "artist" => null ,
        "genre" => null ,
        "single" => null ,
        "img" => null ,
      
        
  
      
    ); 

    public static function getItem($item) {
        $connection = parent::connect();

        $sql = "SELECT * FROM " . TABLE_ITEMS . " WHERE id = :id";

        try {
           
            $st = $connection->prepare($sql);
            $st->bindValue(":id", $item, );
            $st->execute();
            $row = $st->fetch();
            parent::disconnect($connection);
            if ($row) 
            return new Item ($row);
                
        } catch (PDOException $e) {
          
            parent::disconnect($connection);
            die("Failed search: ".$e->getMessage());
        }
    }


    public static function getAllItems() {
        $connection = parent::connect();

        $sql = "SELECT * FROM " . TABLE_ITEMS . " ORDER BY id ";

        $st = $connection->prepare($sql);
       

        try {
            
            
            $st->execute();
       
            $results = array();
          
     
          $results = $st->fetchAll() ;
     
           
            parent::disconnect($connection);

            if ($results) 
            return $results;
         
                  
        } catch (PDOException $e) {
          
            parent::disconnect($connection);
            die("Failed search: ".$e->getMessage());
        }
    }
    public static function getAllItemsSection($section) {
        $connection = parent::connect();

        $sql = "SELECT * FROM " . TABLE_ITEMS . " WHERE genre=:genre ";

        $st = $connection->prepare($sql);
       

        try {
         
            $st->bindValue(":genre", $section);
            
            $st->execute();
       
            $results = array();
          
     
          $results = $st->fetchAll() ;
     
           
            parent::disconnect($connection);

            if ($results) 
            return $results;
         
                  
        } catch (PDOException $e) {
          
            parent::disconnect($connection);
            die("Failed search: ".$e->getMessage());
        }
    }

    public static function newItem($dataItem) {
        
        $connection = parent::connect();
     
        //El id al hacerlo con SERIAL se genera automáticamente
        $sql = "INSERT INTO items (artist, genre, single,img) VALUES (:artist, :genre ,:single, :img)";
     
        try {
            $st = $connection->prepare($sql);
            echo " DATA SENT ";
            print_r($dataItem);

            foreach($dataItem as $key => $value) {
                echo " KEY" . $key . " ";
                echo " VALUE " . $value . " ";
        
                $st->bindValue(":".$key, $value, PDO::PARAM_STR );
            }
            
            $st->execute();
            parent::disconnect($connection);
        } catch (PDOException $e){
            parent::disconnect($connection);
            die("\n Failed petition creating new User : ".$e->getMessage());
        }

        
    }


    public static function deleteItem($item) {
        $connection = parent::connect();

        $sql = "DELETE FROM " . TABLE_ITEMS . " WHERE id =:id";
        echo $sql ;
    
        try {
          // echo ' CONNECTING ';
           
            $st = $connection->prepare($sql);
            $st->bindValue(":id", $item);
            $st->execute();
            //echo ' `DELETE` DONE' ;
            parent::disconnect($connection);
            
        } catch (PDOException $e) {
          
            parent::disconnect($connection);
            die("Failed search: ".$e->getMessage());
        }
    }
    public static function changeItem($id, $field,$new_value) {
        
        $connection = parent::connect();
       

        $sql = "UPDATE items SET $field= '$new_value' WHERE id= $id ";
        
        echo $sql ;
        try {
            $st = $connection->prepare($sql);


            $st->execute();
            echo 'DONE';
            parent::disconnect($connection);

        } catch (PDOException $e) {
            parent::disconnect($connection);
            die("Petición fallida: ".$e->getMessage());
        }
        
    }
};


?>
