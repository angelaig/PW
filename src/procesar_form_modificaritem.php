<?php

session_start();

include 'items_class.inc.php';



$field = $_POST["field"];
$id = $_POST["id"];
$value = $_POST["value"];
echo $field ;
echo $id ;
echo $value ;

echo "procesar_form_modificaritem.php";

Item ::changeItem((int)$id,$field,$value);

header("Location: list_items.php");

exit;

?>





