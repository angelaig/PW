<?php
   // session_start();
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
       
         $(document).ready(function() {
 
                $("#submit").click(function() {

               // var cfilled = ["name_user", "password_user", "confirm_password_user"];
                var user = $("#user").val();
                var name = $("#name").val();
                var lastname = $("#lastname").val();
                var password= $("#password").val();
                var cpassword = $("#cpassword").val();
                var email = $("#email").val();
                        
                if(user==''||name==''|| lastname==''||password==''||cpassword=='' ||email=='' ) {
                     alert("Por favor complete todos los campos  ");
                    return false;
                 }
                

               
                if (user.length <= 3 || user.length > 20){
                    alert("Tu nombre de usuario debe tener una longitud entre 3 y 20 caracteres");
                    return false;
                }
               
            
                
                if (password != cpassword) {

                    alert("Los campos de las"+ password+" contraseñas no coinciden"+cpassword);
                    return false;
                }
                if (cpassword.length < 1) {
                    alert("La contraseña debe tener más de 8 caracteres");
                    return false;
                
                }


                $.ajax({
                type: "POST",
                url: "procesar_form_signup.php",
                data: {
                user: user,
                name: name,
                lastname: lastname,
                password: password,
                email: email,
                },
                cache: false,
                success: function(data) {
                   alert(data);
                   window.location.href = '../index.php';
                 

                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                }
                });
                
                });
                
        });
     


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

            <section class="upper-new-item">

                <section class="new-photo-user">

                <img class="new-img-item" src="../imagenes/select-img.webp">
                
                <input type=button class="input_form_photo" value="add photo">
                </section> 
                <section class="short-fields-modify">
                    


                    <form name="form1" class="modify-user" method="POST"  >
                        <section class="form1-section">
                        <label class ="label_form_user" for="user">Usuario </label><br>
                        <input class="input_form_modify" type="text" id="user" name="user" /><br> 
                     
                        </section>

                        <section class="form1-section">
                        <label class ="label_form_name" for="name">Nombre </label><br>
                        <input class="input_form_modify" type="text" id="name" name="name" /><br>

                        </section>

                        <section class="form1-section">
                        <label class ="label_form_lastname" for="lastname">Apellido </label><br>
                        <input class="input_form_modify" type="text" id="lastname" name="lastname" /><br>
                        </section>
                        <section class="form1-section">
                        <label class ="label_form_password" for="password">Contraseña </label><br>
                        <input class="input_form_modify" type="password" id="password" name="password" /><br>  
                      
                        </section>
                        <section class="form1-section">
                        <label class ="label_form_password" for="cpassword">Confirma contraseña  </label><br>
                        <input class="input_form_modify" type="password" id="cpassword" name="cpassword" /><br>  
                      
                        </section>
                        <section class="form1-section">  
                        <label class ="label_form_email" for="email">Correo </label><br>
                        <input class="input_form_modify" type="text" id="email" name="email" /><br>
                        </section>

                    </form >
                </section>
            </section>


                 

        <section class="description-section">

        

            <label class ="label_form" for="description_form">Preséntate </label><br>

            <form  name="form2" class="new-item-register2" method="POST" >
                <textarea class="input_form_description" type="text" id="description_form" name="description_form" >
                </textarea>

            </form>
         
                
         <!--   <input class="submit-button" type="submit" id="submit" name="submit"  onclick="submitForms()" /> -->
         <input class="submit-button" type="submit" id="submit" name="submit"   />

        </section>
    
        </main>



        
            
            <footer class="footer">
                <a href="contacto.php" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
        </body>
    </php>
