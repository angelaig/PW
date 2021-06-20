<?php
   // session_start();

    session_start();
  

    include 'sections_class.inc.php';
    
    ini_set('display_errors', 1);
    error_reporting(E_ALL|E_STRICT);
   

    $id  = $_POST["id"];
    $field = $_POST["field"];
    /*
    $oItem = Item::getItem((int)$_POST['id']);
    $id  = $oItem->getField('id');
    $artist = $oItem->getField('artist');
    $genre = $oItem->getField('genre');
    $single = $oItem->getField('single');
    */
    
?>
   


<!doctype php>
    <php>
        <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     
            <meta content="width=device-width, initial-scale=1" name="viewport" />
            <link rel="stylesheet" href="../css/style.css">
            <link rel="icon" type="image/png" href="../imagenes/deezer.png">
            <title>
               Muzer
            </title>
	
	
        </head>
        <body> 
       
    

            <header class="root-header">
                <section class="up-header">
                   
                    <img class="logodeezer" src="../imagenes/corner-deezer.jpg">
                    
                    <p class="titledeezer">
                        <span class="d">MUZER</span>
                       
                    </p>


                    



                </section>
                <nav class="categories">
                    <a class="seccion" href="seccion1.php">POP</a>
                    <a class="seccion" href="seccion2.php">ROCK</a>
                    <a class="seccion" href="seccion3.php">JAZZ</a>
                    <a class="seccion" href="seccion3.php">FUNK</a>
                    <a class="seccion" href="seccion3.php">R&B</a>
                    <a class="seccion" href="seccion3.php">FUSSION</a>
                    <a class="seccion" href="seccion3.php">FLAMENCO</a>
                </nav>


	

            </header>

        <section class="upper-new-item">

            
            <section class="short-fields-modify">
                    
         
            <form name="modify_profile" class="modify_profile" method="POST" action ="procesar_form_modificaritem.php" >
                       
                      
                        <label class ="label_form_user" for="user">¿Está seguro/a de que desea cambiar el campo <?php echo $_POST["field"]; ?> ? Introduzca el nuevo valor. </label><br>
                     

                        <?php 

                            require_once('sections_class.inc.php');
                            if($_POST["field"]=='genre'){

                                echo '<select class="input_form_modify" type="text" id="value" name="value" /><br>';
                        

                                     
                                    $secciones = Section::getAllSections();
                                    $n = sizeof($secciones);
                                    for ($x = 0; $x < $n; $x++) {
    
                                        echo '<option name ="value" id="value" value="'.$secciones[$x]["sname"].'">'.$secciones[$x]["sname"].'</option>';
                                       
                                          
                                    }
                                echo '</select>';
                                echo '<input class="input_form_modify" type="hidden"  id="field" name="field"  value= "'.$field.'"  /><br>
                                <input class="input_form_modify" type="hidden"  id="id" name="id"  value= "'.$id.'"  /><br>';
                               
                              

                            }else{

                                echo'  
                                <input class="input_form_modify" type=text id= "value" name= "value" />
                                <!-- <input class="input_form_modify" type=text id= "password" name= "password" />-->
                                <input class="input_form_modify" type="hidden"  id="field" name="field"  value= "'.$field.'"  /><br>
                                <input class="input_form_modify" type="hidden"  id="id" name="id"  value= "<?php echo $id ; ?>"  /><br>';
                            }
                     


                        ?>
                        <button class="submit-button" type="submit" id="submit" name="submit"   >Modificar </button>
                      


             </form>
            </section>
          
        </section>
        
    

    
    
        </main>



        
            
            <footer class="footer">
                <a href="contacto.php" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
        </body>
    </php>



