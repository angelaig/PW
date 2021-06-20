<?php

include_once 'datosObject.class.inc.php';


//echo'USER CLASS';
class User extends DataObject {

    protected $data = array( 
      //  "name_user" => angela, 
     //   "password_user" => angela1234
     "user" => null ,
     "name" => null ,
     "lastname" => null ,
     "password" => null ,
     "email" => null ,
     
      
    ); 

    public static function getUser($user) {
        $connection = parent::connect();

        $sql = "SELECT * FROM " . TABLE_USERS . " WHERE user = :user";

        try {
           
            $st = $connection->prepare($sql);
            $st->bindValue(":user", $user);
            $st->execute();
            $row = $st->fetch();
            parent::disconnect($connection);
            if ($row) 
            return new User ($row);
                  echo 'connected';
        } catch (PDOException $e) {
          
            parent::disconnect($connection);
            die("Failed search: ".$e->getMessage());
        }
    }

    public static function newUser($dataUser) {
        
        $connection = parent::connect();
    

     

        $sql = "INSERT INTO users_pw (user, name, lastname,password,email) VALUES (:user, :name ,:lastname, :password, :email)";
     

        try {
            $st = $connection->prepare($sql);
            echo " DATA SENT ";
            print_r($dataUser);

            foreach($dataUser as $key => $value) {
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


    
    public static function loginUser($User, $password_user) {

        echo'CHECK\n' ;
        
        //$User='angela';
        //$password_user='angela1234';
       
        $connection = parent::connect();
        echo'CONNECTION\n' ;
        $sql = "SELECT * FROM " . TABLE_USERS . " WHERE user = :user AND password = :password";

        try {
            $st = $connection->prepare($sql);

            $st->bindValue(":user", $User);
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

    public static function changeUser($dataUser, $field,$new_value) {
        
        $connection = parent::connect();
        echo'CHECK CHANGE USER\n' ;
        
       
        $connection = parent::connect();
        echo " DATA SENT ";
        print_r($dataUser);

        //Cambio la variable
        $old_user = $dataUser['user'];
        foreach($dataUser as $key => $value) {

            if ($key == $field){
            
                $dataUser[$key] =$new_value;

            }
        }

        $user=$dataUser['user'];
        $name=$dataUser['name'];
        $lastname=$dataUser['lastname'];
        $password=$dataUser['password'];
        $email=$dataUser['email'];

        $sql = "UPDATE users_pw SET user='$user', `name`='$name', lastname = '$lastname', `password`= '$password',
        email='$email' WHERE user='$old_user'";
    

    

       
        try {
            $st = $connection->prepare($sql);


            $st->execute($params);
            echo 'DONE';
            parent::disconnect($connection);

        } catch (PDOException $e) {
            parent::disconnect($connection);
            die("Petición fallida: ".$e->getMessage());
        }
        
    }
};




?>
