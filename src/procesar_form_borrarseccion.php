<?php

session_start();

include 'sections_class.inc.php';



$sname = $_POST['sname'];



//echo $index_section ;
//$sname = Section:: getSectionNth($sname);
Section ::deleteSection($sname);



header("Location: list_secciones.php");
//print_r(data);
//echo 'VALIDADO';
exit;

?>



