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
       
         $(document).ready(function() {

    
                
                $("#submit").click(function() {

                     var value = $("#value").val();
                     var password = $("#password").val();
                   

                            //Comprobaciones de usuario
                        if (value.length <= 3 ||value.length > 20){
                            alert("Tu nombre de usuario debe tener una longitud entre 3 y 20 caracteres");
                            return false;
                        }
                  
                    
                    

                        $.ajax({
                        type: "POST",
                        url: "procesar_form_modificar.php",
                        data: {
                        field_modify: 'user',
                        value_field_modify: value,
                        password : password 
                
                        },
                        cache: false,
                        success: function(data) {
                         alert(data);
                           // window.location.href = 'profile_user.php';
                         window.location.href =   'profile_user.php';
                      //  window.location.href = "procesar_form_modificar.php";
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
                    
         
            <form name="modify_profile" class="modify_profile" method="POST"  >
                       
                      
                        <label class ="label_form_user" for="user">¿Está seguro/a de que desea cambiar el campo user? Introduzca el nuevo valor. </label><br>
                     
                        <input class="input_form_modify" type=text id= "value" name= "value" />
                        <input class="input_form_modify" type=text id= "password" name= "password" />
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


