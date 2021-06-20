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
                    <a class="seccion" href="seccion1.php">POP</a>
                    <a class="seccion" href="seccion2.php">ROCK</a>
                    <a class="seccion" href="seccion3.php">JAZZ</a>
                    <a class="seccion" href="seccion3.php">FUNK</a>
                    <a class="seccion" href="seccion3.php">R&B</a>
                    <a class="seccion" href="seccion3.php">FUSSION</a>
                    <a class="seccion" href="seccion3.php">FLAMENCO</a>
                </nav>

            </header>

                    <section>

        
            <section class="short-fields-modify">
                    
            

                 
                        <section class="form1-section"> 
                        <form method="POST" action ="modificar_user.php" >
                        <label class ="label_form_user" for="user">Usuario </label><br>
                        <input class="input_form_modify" type="text" id="user" name="user" value= "<?= $user ?>" />
                        <!--Mando el user (clave primaria y el campo a modificar) -->
                        <input class="input_form_modify" type="hidden" id="field" name="field" value= "user" />
                        <input class="input_form_modify" type="hidden" id="user" name="user" value= "<?= $user ?>" />
                        <button class="submit-button-name" type="submit" id="submit-user" name="submit-user"   >Modificar </button>
                        </form>
                        </section>
                      
   
                        <section class="form1-section">
                        <form method="POST" action ="modificar_user.php" >
                        <label class ="label_form_name" for="name_user">Nombre </label><br>
                        <input class="input_form_modify" type="text" id="name" name="name" value= "<?= $name ?>"/>

                        <input class="input_form_modify" type="hidden" id="user" name="user" value= "<?= $user ?>" />
                        <input class="input_form_modify" type="hidden" id="field" name="field" value= "name" />
                        <button class="submit-button-name" type="submit" id="submit-user" name="submit-user"   >Modificar </button>
                        </form>
                        </section>

                        <section class="form1-section">
                        <form method="POST" action ="modificar_user.php" >
                        <label class ="label_form_lastname" for="name_user">Apellido </label><br>
                        <input class="input_form_modify" type="text" id="last_name" name="last_name" value ="<?= $lastname ?>" />
                        <input class="input_form_modify" type="hidden" id="user" name="user" value= "<?= $user ?>" />
                        <input class="input_form_modify" type="hidden" id="field" name="field" value= "lastname" />
                        <button class="submit-button-name" type="submit" id="submit-user" name="submit-user"   >Modificar </button>
                        </form>
                        </section>



                        <section class="form1-section">
                        <form method="POST" action ="modificar_user.php" >
                        <label class ="label_form_password" for="password_user">Contraseña </label><br>
                        <input class="input_form_modify" type="password" id="password_user" name="password_user" value ="password" />
                        <input class="input_form_modify" type="hidden" id="user" name="user" value= "<?= $user ?>" />
                        <input class="input_form_modify" type="hidden" id="field" name="field" value= "password" />
                        <button class="submit-button-name" type="submit" id="submit-user" name="submit-user"   >Modificar </button>
                        </form>
                        </section>


                        <section class="form1-section"> 
                        <form method="POST" action ="modificar_user.php" > 
                        <label class ="label_form_email" for="password_user">Correo </label><br>
                        <input class="input_form_modify" type="text" id="email" name="email"  value ="<?= $email?>"/>
                        <input class="input_form_modify" type="hidden" id="user" name="user" value= "<?= $user ?>" />
                         <input class="input_form_modify" type="hidden" id="field" name="field" value= "name" />
                         <button class="submit-button-name" type="submit" id="submit-user" name="submit-user"   >Modificar </button>
                        </form >
                 </section>
                

            
        
          
        </section>
                 
        </section>
   
       
    
        </main>



        
            
            <footer class="footer">
                <a href="contacto.php" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
        </body>
    </php>
