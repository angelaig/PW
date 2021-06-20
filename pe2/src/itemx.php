<?php
   // session_start();

    session_start();

    include 'items_class.inc.php';
    include 'sections_class.inc.php';


    $oItem = Item::getItem((int)$_POST['id']);
    $id  = $oItem->getField('id');
    $artist = $oItem->getField('artist');
    $genre = $oItem->getField('genre');
    $single = $oItem->getField('single');
    $img = $oItem->getField('img');
 
    
   
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
        <script>
                                    
                var loadFile = function(event) {
                                            var output = document.getElementById('output');
                                            output.src = URL.createObjectURL(event.target.files[0]);
                                            output.onload = function() {
                                            URL.revokeObjectURL(output.src) // free memory
                                            }
                };
                            
            
                    //Comprobar que género es de una sección
             

        </script>


        <body> 
    
        <header class="root-header">
                <section class="up-header">
                   
                    <img class="logodeezer" src="./imagenes/corner-deezer.jpg">
                    
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

                        
                            <a class="submit-button-name"   href="administracion.php"   > Administracion </a>           
        
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
                        
                        <a class="register" href="altausuario.php" >Nuevo usuario</a>
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
                                <form method = "POST" action = "seccionx.php" >
                                <button class="seccion" type="submit" id="sname" name="sname"  value ='.$secciones[$x]["sname"].' >  '.  $secciones[$x]["sname"] .' </button>
                                </form>';
                            }
                        ?>
               </nav>
            </header>

           
            <main class="mainindex">

                

    
            <section class="upper-new-item">

         
                    <section class="new-photo-user">
                  

                  
                    
                    <!--<p><label for="file" style="cursor: pointer;">Upload Image</label></p>-->
                    <p><img  id="output" class="new-img-item" src="../imagenes/<?php echo $img;?>" width="200" /></p>

                 
                    </section> 



                <section class="short-fields-modify">
                 
                        <section class="form1-section">
                                <label class ="label_form_name" for="artist">Artist </label><br>
                            
                                <input class="input_form_modify" type="text" id="artist" name="artist"  value= "<?php echo $artist ;?>"  /><br> 
                               
                    
                        </section>

                        <section class="form1-section">
                                    <label class ="label_form_name" for="genre">Genre </label><br>
                                  
                                    <input class="input_form_modify" type="text" id="genre" name="genre"  value= "<?php echo $genre; ?>" />
                                    
                        </section>
                   
                        <section class="form1-section">
                                    <label class ="label_form_lastname" for="single">Single </label><br>
                                 
                                    <input class="input_form_modify" type="text" id="single" name="single"  value= "<?php echo $single; ?>" /><br>
                                  
                        </section>
                     

             


                </section>
                
            </section>
         
     





                               
            </main>
   
        
           
            <footer class="footer">
                <a href="contacto.html" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
          
        </body>
<php>


