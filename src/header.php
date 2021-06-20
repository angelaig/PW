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


                <!--
                <section class="sign-out">
                    <form class="form_sign_in" method="POST" action="src/sitioweb.php">
                        <label class ="label_form" for="user">user</label><br>
                        <input class="input_form" type="text" id="user" name="user" required/><br>
                        <label  class ="label_form" for="password">password</label><br>
                        <input class="input_form" type="password" id="password" name="password" required/><br><br>
                        <input class="input_form_button" type="submit" id="send_user" name="send_user" />
                    </form>

                    <a class="register" href="src/altausuario.php" >Nuevo usuario</a>
                </section>
                -->

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
