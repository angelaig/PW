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
                        <section class="d">MUZER</section>
                       
                    </p>

          
             <?php
                    if (!empty($_SESSION['user'])){

                     echo '

                   
                   
                    <section class="box_" >

                    <section class="box-user blue">
                    <p class="user">' . $_SESSION['user'] .' </p>
                    </section>
                   
                    <a class="admin" href="procesar_form_unlogin.php"><p>Desconectarse</p></a>
                    <a class="admin" href="profile_user.php"><p>Configurar perfil </p></a>
                        

                    </section>
                    
                    ';


                        if($_SESSION['user']=='admin'){

                        echo '<section class="form1-section">  

                        
                            <a class="submit-button-name" type="submit"  href="administracion.php"   > Administracion </a>           
        
                            </section>
                            ';

                        }
                    }
                    else {
                        echo '
                        <section class="sign-out">
                        <form class="form_sign_in" method="POST" action="procesar_form_login.php">

                            <label class ="label_form" for="user">user</label><br>
                            <input class="input_form" type="text" id="user" name="user" required/><br>
                            <label  class ="label_form" for="password">password</label><br>
                            <input class="input_form" type="password" id="password" name="password" required/><br><br>

                            
                            <input class="input_form_button" type="submit" id="send_user" name="send_user" />


                        </form>
                        
                   
                        </section>';
                    }

                    
              ?>

              </section>




            
             <nav class="categories">
             <?php 
                    $secciones = Section::getAllSections();
                    $n = sizeof($secciones);
                    for ($x = 0; $x < $n; $x++) {

                        echo '
                         <form method = "POST" action =  "seccionx.php" >
                         <button class="seccion" type="submit" id="sname" name="sname"  value ='.$secciones[$x]["sname"].' >  '.  $secciones[$x]["sname"] .' </button>
                        </form>';
                    }
                ?>
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



