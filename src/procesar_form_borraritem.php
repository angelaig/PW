<?php

session_start();

include 'items_class.inc.php';



$id = $_POST['id'];

//print_r('IMPRIMO '.$id);

echo $id ;
//echo $index_section ;
//$sname = Section:: getSectionNth($sname);

//$item = Item ::getItem($id);
Item ::deleteItem((int)$id);
//print_r($item);


header("Location: list_items.php");
//print_r(data);
//echo 'VALIDADO';
exit;

?>




