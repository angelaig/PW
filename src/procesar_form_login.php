<?php

 include 'users_class.inc.php';
 
session_start();




echo'Entro en validado';
echo  $_SESSION['user'] ;
$validado = User::loginUser($_POST['user'], $_POST['password']);



if ($validado) {
    $_SESSION['user'] = $_POST['user'];
   // echo 'VALIDADO';
    header("Location: ../index.php");
    exit;
}
else {
    header("Location: ../index.php");
   
    exit;
}
Configure::write('debug', 1);
?>
