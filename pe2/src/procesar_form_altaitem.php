
<?php

session_start();

include 'items_class.inc.php';



$data['artist'] = $_POST['artist'];
$data['genre'] = $_POST['genre'] ;
$data['single'] = $_POST['single'] ;
//$data['img'] = basename($_FILES["image"]["name"]);
$data['img'] =  '../imagenes/'.$_POST['image'];


print_r($data);

Item::newItem($data);


header("Location: list_items.php");
//print_r(data);
//echo 'VALIDADO';
exit;

?>

