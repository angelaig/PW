
<?php

session_start();

include 'users_class.inc.php';

//$oUser = User::getUser($_SESSION['user']);


$data['field']= $_POST['field'];
$data['value'] =  $_POST['value'];
$password = $$_POST['password'];


$oUser = User::getUser($_SESSION['user']);


$dataUser['user'] =  $oUser->getField('user');
$dataUser['name'] = $oUser->getField('name');
$dataUser['lastname'] = $oUser->getField('lastname');
//No debería poder obtener contraseña
$dataUser['password'] = $oUser->getField('password');
$dataUser['email'] = $oUser->getField('email');

//echo " VALUE USER SESSION " .  $dataUser['user'] . " ";

  
  User::changeUser($dataUser, $data['field'],$data['value']);
  // Asignar nueva sesión 

   $_SESSION['user'] = $dataUser['user'];
   $_SESSION['password'] = $password ;

    if($data['field'] == 'user' ){
        $_SESSION['user'] = $data['value'];

    }
    else if($data['field'] == 'password'){
        $_SESSION['password'] = $data['value'];

    }
    header("Location: profile_user.php");

    exit;

?>





