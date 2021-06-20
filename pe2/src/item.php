
<?php

session_start();

include 'items_class.inc.php';


$data = Item::getAllItems();
print_r($data);

//header("Location: list_items.php");
//print_r(data);
//echo 'VALIDADO';
exit;

?>


