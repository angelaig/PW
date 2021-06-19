
<?php

session_start();

include 'users_class.inc.php';

//$oUser = User::getUser($_SESSION['user']);


$data['field_modify']= $_POST['field_modify'];
$data['value_field_modify'] =  $_POST['value_field_modify'];
$password = $$_POST['password'];

//echo " FIELD MODIFY " .  $_POST['field_modify'] . " ";
//echo " VALUE FIELD TO MODIFY " .  $_POST['value_field_modify'] . " ";
//echo " USER " .  $_SESSION['user'] . " ";


$oUser = User::getUser($_SESSION['user']);


$dataUser['user'] =  $oUser->getField('user');
$dataUser['name'] = $oUser->getField('name');
$dataUser['lastname'] = $oUser->getField('lastname');
//No debería poder obtener contraseña
$dataUser['password'] = $oUser->getField('password');
$dataUser['email'] = $oUser->getField('email');

//echo " VALUE USER SESSION " .  $dataUser['user'] . " ";

  
  User::changeUser($dataUser, $data['field_modify'],$data['value_field_modify']);
  // Asignar nueva sesión 

   $_SESSION['user'] = $dataUser['user'];
   $_SESSION['password'] = $password ;

    if($data['field_modify'] == 'user' ){
        $_SESSION['user'] = $data['value_field_modify'];

    }
    else if($data['field_modify'] == 'password'){
        $_SESSION['password'] = $data['value_field_modify'];

    }
    

    exit;

?>





