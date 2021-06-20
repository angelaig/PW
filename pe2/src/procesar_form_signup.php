
<?php

session_start();

include 'users_class.inc.php';



$data['user'] = $_POST['user'];
$data['name'] = $_POST['name'] ;
$data['lastname'] = $_POST['lastname'] ;
$data['password'] = $_POST['password'];
$data['email'] = $_POST['email'];


User::newUser($data);


$_SESSION['user'] = $data['user'];
$_SESSION['password'] =$data['password'] ;

//header("Location: ../index.php");
//print_r(data);
//echo 'VALIDADO';
exit;

?>


