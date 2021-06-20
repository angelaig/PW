<?php

session_start();

include 'sections_class.inc.php';



$sname = $_POST['sname'];



Section ::deleteSection($sname);



header("Location: list_secciones.php");

exit;

?>



