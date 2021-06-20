<?php
   // session_start();

    session_start();

    include 'users_class.inc.php';

    $oUser = User::getUser($_SESSION['user']);

    
    $user = $_SESSION['user'];
   
    $name = $oUser->getField('name');
    $lastname = $oUser->getField('lastname');
    $password = $oUser->getField('password');
    $email = $oUser->getField('email');
    
   
?>

<!doctype php>
    <php>
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
                    <a class="seccion" href="src/seccion1.php">POP</a>
                    <a class="seccion" href="src/seccion2.php">ROCK</a>
                    <a class="seccion" href="src/seccion3.php">JAZZ</a>
                    <a class="seccion" href="src/seccion3.php">FUNK</a>
                    <a class="seccion" href="src/seccion3.php">R&B</a>
                    <a class="seccion" href="src/seccion3.php">FUSSION</a>
                    <a class="seccion" href="src/seccion3.php">FLAMENCO</a>
                </nav>

            </header>

              
          
            <main class="mainindex">

                

            
              
          <?php          
            if($_SESSION['user']=='admin'){

                    echo '<section class="item1"  href="altaitem.php" >                                        
                                                <img class="altaitem" src="../imagenes/item.png"> 
                                            
                                                <a class="title" href = list_items.php>
                                                 Configurar items
                                                </a>
                                        </section>
                              
                                        <section class="item1"  href="list_secciones.php" >                                        
                                                <img class="altaitem" src="../imagenes/item.png" > 
                                            
                                                <a class="title" href = list_secciones.php>
                                                 Configurar secciones
                                                </a>
                                        </section>
                    ';
                                 
            }   
            ?>
           
            </main>
   
        
           
            <footer class="footer">
                <a href="contacto.html" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
          
        </body>
    </php>