<?php
    session_start();
     
    include 'src/sections_class.inc.php';


    
?>

<!DOCTYPE php>

        <head>
            <meta content="width=device-width, initial-scale=1" name="viewport" />
            <link rel="stylesheet" href="./css/style.css">
          
         
            <link rel="icon" type="image/png" href="./imagenes/deezer.png">
            <title>
               Muzer
            </title>

        </head>
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
                   
                    <a class="admin" href="src/procesar_form_unlogin.php"><p>Desconectarse</p></a>
                    <a class="admin" href="src/profile_user.php"><p>Configurar perfil </p></a>
                        

                    </section>
                    
                    ';


                        if($_SESSION['user']=='admin'){

                        echo '<section class="form1-section">  

                        
                            <a class="submit-button-name" type="submit"  href="src/administracion.php"   > Administraciooon </a>           
        
                            </section>
                            ';

                        }
                    }
                    else {
                        echo '
                        <section class="sign-out">
                        <form class="form_sign_in" method="POST" action="src/procesar_form_login.php">

                            <label class ="label_form" for="user">user</label><br>
                            <input class="input_form" type="text" id="user" name="user" required/><br>
                            <label  class ="label_form" for="password">password</label><br>
                            <input class="input_form" type="password" id="password" name="password" required/><br><br>

                            
                            <input class="input_form_button" type="submit" id="send_user" name="send_user" />


                        </form>
                        
                        <a class="register" href="src/altausuario.php" >Nuevo usuario</a>
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
                         <button class="seccion" type="submit" id="sname" name="sname"  value ='.$secciones[$x]["sname"].' >  '.  $secciones[$x]["sname"] .' </a>
                        </form>';
                    }
                ?>
            </nav>






            </header>
             
             
      
            <main class="mainindex">

                <img class="main-deezer" src="./imagenes/dee.jpg">

                <section class="list-library">
                    <span class="library">
                       Library
                    </span>
                    <nav class="list">
                        <ul>
                            <li>
                                <a  class="item1" href="src/item1.php" >                                        
                                        <img class="imgitem" src="./imagenes/queen.jpg"> 
                                       
                                        <p class="title">
                                           Queen
                                        </p>
                                </a>
                            </li>

                            <li>
                                <a  class="item1" href="src/item1.php" >                                            
                                        <img class="imgitem" src="./imagenes/queen.jpg"> 
                                       
                                        <p class="title">
                                           Queen
                                        </p>
                                </a>
                            </li>

                            <li>
                                <a  class="item1" href="src/item1.php" >                                          
                                        <img class="imgitem" src="./imagenes/queen.jpg"> 
                                       
                                        <p class="title">
                                           Queen
                                        </p>
                                </a>
                            </li>

                            <li>
                                <a  class="item1" href="src/item1.php" >                                         
                                        <img class="imgitem" src="./imagenes/queen.jpg"> 
                                       
                                        <p class="title">
                                           Queen
                                        </p>
                                </a>
                            </li>

                            <li>
                                   <a  class="item1" href="src/item1.php" >                                          
                                        <img class="imgitem" src="./imagenes/queen.jpg"> 
                                       
                                        <p class="title">
                                           Queen
                                        </p>
                                </a>
                            </li>

                            <li>
                                   <a  class="item1" href="src/item1.php" >                                          
                                        <img class="imgitem" src="./imagenes/queen.jpg"> 
                                       
                                        <p class="title">
                                           Queen
                                        </p>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </section>
            </main>
   
        
            <footer class="footer">
                <a href="src/contacto.php" >Contacto</a>
                <a href="como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
        </body>

</php>
