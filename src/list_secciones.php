<?php
   // session_start();

    session_start();

 
    include 'sections_class.inc.php';
  
   
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
        


    <script>
       
    

  </script>



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

                        
                            <a class="submit-button-name" type="submit"  href="administracion.php"   > Administraciooon </a>           
        
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
                    <a class="seccion" href="seccion1.php">POP</a>
                    <a class="seccion" href="seccion2.php">ROCK</a>
                    <a class="seccion" href="seccion3.php">JAZZ</a>
                    <a class="seccion" href="seccion3.php">FUNK</a>
                    <a class="seccion" href="seccion3.php">R&B</a>
                    <a class="seccion" href="seccion3.php">FUSSION</a>
                    <a class="seccion" href="seccion3.php">FLAMENCO</a>
                </nav>

            </header>

           
            <main class="mainindex">
            <section class="alta-seccion-nueva"   >   
            <form method = "POST" action =  "altaseccion.php" >
              <button class="submit-button-name" type="submit" id="sname" name=" sname"   >Nueva </button>
            </form>
            </section>
                         
            <section class ="list_secciones">
                            <?php          


                                             $secciones = Section::getAllSections();
                                             
                                             $n = sizeof($secciones);
                                          
                                             for ($x = 0; $x < $n; $x++) {
                                                echo '  <section class="alta-seccion"  id = '.$x.', name = '.$x.'  >   

                                                                                         
                                                          <p class = name_seccionp>'.  $secciones[$x]["sname"] .' </p>
                                                         

                                                          <form method = "POST" action =  "editar_seccion.php" >
                                                          <button class="submit-button-name" type="submit" id="sname" name=" sname"   value ='.$secciones[$x]["sname"].' >Editar </button>
                                                          </form>


                                                          <form method = "POST" action =  "procesar_form_borrarseccion.php" >
                                                          <button class="submit-button-name" type="submit" id="sname" name="sname"     href = "borrar_seccion.php"  value ='.$secciones[$x]["sname"].'    >Borrar </button> 
                                                          </form>
                                                
                                                        </section>';
                                             }
                           ?>

                                            
                                    

                                        
            </section>                
            </main>
   
        
           
            <footer class="footer">
                <a href="contacto.html" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
          
        </body>
<php>

