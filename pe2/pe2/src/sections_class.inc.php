<?php

include 'datosObject.class.inc.php';



class Section extends DataObject {

    protected $data = array( 
    
     "sname" => null ,
  
      
    ); 

    public static function getSection($section) {
        $connection = parent::connect();

        $sql = "SELECT * FROM " . TABLE_SECTIONS . " WHERE sname = :sname ";

        try {
           
            $st = $connection->prepare($sql);
            $st->bindValue(":sname", $section);
            $st->execute();
            $row = $st->fetch();
            parent::disconnect($connection);
            if ($row) 
            return new Section ($row);
                  echo 'connected';
        } catch (PDOException $e) {
          
            parent::disconnect($connection);
            die("Failed search: ".$e->getMessage());
        }
    }


    public static function deleteSection($section) {
        $connection = parent::connect();

        $sql = "DELETE FROM " . TABLE_SECTIONS . " WHERE sname = '$section'";
        echo $sql ;
    
        try {
           
            $st = $connection->prepare($sql);
     //       $st->bindValue(":sname", $section);
            $st->execute();
            ;
            parent::disconnect($connection);
       
        } catch (PDOException $e) {
          
            parent::disconnect($connection);
            die("Failed search: ".$e->getMessage());
        }
    }


    //Get section by number of order
    public static function getSectionNth($section_nth) {
        $connection = parent::connect();

        //$sql = "SELECT * FROM " . TABLE_SECTIONS . " ORDER BY sname LIMIT 1 OFFSET " . $section_nth;
        $SQL=  'SELECT * FROM sections ORDER BY sname LIMIT 1 OFFSET 0';


        try {
           
            $st = $connection->prepare($sql);
          
            $st->execute();
            $row = $st->fetch();
            parent::disconnect($connection);
            if ($row) 
            return new Section ($row);
                  echo 'connected';
        } catch (PDOException $e) {
          
            parent::disconnect($connection);
            die("Failed search: ".$e->getMessage());
        }
    }


    public static function getAllSections() {
        $connection = parent::connect();

        $sql = "SELECT * FROM " . TABLE_SECTIONS . " ORDER BY sname ";

        $st = $connection->prepare($sql);
       

        try {
            
            
            $st->execute();
       
            $results = array();
          
            
        /*  foreach ($st->fetchAll() as $section){
              echo 'RESUUULT ';
                 $results[] =  $section;
           }
          */
          $results = $st->fetchAll() ;
     
           
            parent::disconnect($connection);

            if ($results) 
            return $results;
         
                  
        } catch (PDOException $e) {
          
            parent::disconnect($connection);
            die("Failed search: ".$e->getMessage());
        }
    }


    public static function newSection($dataSection) {
        
        $connection = parent::connect();
    

     

        $sql = "INSERT INTO " . TABLE_SECTIONS . " ( sname )  VALUES (:sname)";
     

        try {
            $st = $connection->prepare($sql);
        
            print_r($dataSection);

            foreach($dataSection as $key => $value) {
                //echo " KEY" . $key . " ";
                //echo " VALUE " . $value . " ";
        
                $st->bindValue(":".$key, $value, PDO::PARAM_STR );
            }
            
            $st->execute();
            parent::disconnect($connection);
        } catch (PDOException $e){
            parent::disconnect($connection);
            die("\n Failed petition creating new Section : ".$e->getMessage());
        }

        
    }

/*
    
    public static function loginUser($section, $password_user) {

        echo'CHECK\n' ;
        
        //$section='angela';
        //$password_user='angela1234';
       
        $connection = parent::connect();
        echo'CONNECTION\n' ;
        $sql = "SELECT * FROM " . TABLE_USERS . " WHERE user = :sname AND password = :password";

        try {
            $st = $connection->prepare($sql);

            $st->bindValue(":sname", $section);
           //$st->bindValue(":password_user", hash('sha512', $password_user));
           $st->bindValue(":password", $password_user);
        
            $st->execute();

            $rows = $st->rowCount();
            
            if ($rows == 1){
                parent::disconnect($connection);
                return true;
            }
            else {
                parent::disconnect($connection);
                return false;
            }

        } catch (PDOException $e){
            parent::disconnect($connection);
            die("Failed petition: ".$e->getMessage());
        }
        
        return true;
    }
    */
    public static function editSection($sname, $newsname) {
        
        $connection = parent::connect();
        echo'CHECK CHANGE SECTION\n' ;
        echo 'NAME SECTION ' ;
        echo $sname;
        echo 'NEW NAME SECTION ' ;
        echo $newsname;
        
       
        $connection = parent::connect();
       


       // $sql = "UPDATE " . TABLE_SECTIONS . " SET sname=:newsname WHERE sname=:sname ";
       $sql = "UPDATE " . TABLE_SECTIONS . " SET sname='$newsname' WHERE sname='$sname'";
    
        echo $sql ;
    

       
        try {
            $st = $connection->prepare($sql);
           // $st->bindValue(":sname", $sname, PDO::PARAM_STR);
          //  $st->bindValue(":newsname", $newsname,PDO::PARAM_STR);


            $st->execute();
            echo 'DONE';
            parent::disconnect($connection);

        } catch (PDOException $e) {
            parent::disconnect($connection);
            die("Failed petition editSection: ".$e->getMessage());
        }
        
    }
};




?>

