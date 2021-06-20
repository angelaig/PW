<!DOCTYPE html>
    <html>
        <head>
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



       


        <main >
         
            
            <section class="upper-new-item">
                    <img class="new-img" src="../imagenes/queen.jpg">
                  
                   
                  
                <section class="short-fields">
                    <section class="short-fields-right" >

                        <label class ="label_form" for="name_artist">Artist </label><br>
                     
                        <label class ="label_form" for="name_genre">Genre </label><br>
                       
                        <label class ="label_form" for="name_single">Single </label><br>
                        
            
                    </section>
                    
                    <section class="short-fields-left" >
                            
                                
                        <input class="input_form" type="text" id="name_artist" name="name_artist" value="Queen" readonly/><br>

                                
                        <input class="input_form" type="text" id="name_genre" name="name_genre " value="ROCK" readonly/><br>
                        
                    
                        <input class="input_form" type="text" id="name_single" name="name_single" value="Bohemian" readonly/><br>
            
                 </section>

                
                </section>
              
            </section>
                     

            <section class="description-section">

            

                <label class ="label_form" for="description_form">Descripción </label><br>
               
                 <p class= "description-text"> Grupo muy famoso </p>
             
       

            </section>

    








        </main>
            <footer class="footer">
                <a href="contacto.html" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
        </body>
    </html>