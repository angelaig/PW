
<?php

session_start();

include 'sections_class.inc.php';



$data['sname'] = $_POST['sname'];



Section ::newSection($data);



header("Location: list_secciones.php");
//print_r(data);
//echo 'VALIDADO';
exit;

?>



