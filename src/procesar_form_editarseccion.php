<?php

session_start();

include 'sections_class.inc.php';



$sname = $_POST['sname'];
$newsname = $_POST['newsname'];


//echo $index_section ;
//$sname = Section:: getSectionNth($sname);
Section ::editSection($sname, $newsname);



header("Location: list_secciones.php");
//print_r(data);
//echo 'VALIDADO';
exit;

?>




