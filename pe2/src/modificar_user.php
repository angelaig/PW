<?php
   // session_start();

    session_start();

    include 'users_class.inc.php';


    $user = $_POST["user"];
    $field = $_POST["field"];



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
     



                        
        function validate() {



                     var user = $("#user").val();
                     var value = $("#value").val();
                     var field =  $("#field").val();

                     console.log(user);
                     console.log(value);
                     console.log(field);
                     var password = $("#password").val();
                     var password_session = $_SESSION['password'];
                     
                  
                    //Si la contraseña dada no coincide con la de sesión
                    if( password != password_session ){

                        
                        alert("Por favor introduzca correctamente su contraseña actual");
                         return false;
                    }



                    if(field == "user"){

                           
                            if (value.length <= 3 || value.length > 20){
                                alert("Tu nombre de usuario debe tener una longitud entre 3 y 20 caracteres");
                                return false;
                            }

                 
                    }else if(field == "name"){

                            let nameRegex = /^[a-zA-Z ]{2,30}$/;

                            if(!value.match(nameRegex)){
                                alert("Por favor introduzca un nombre válido sin números o caracteres especiales");
                                return false;

                            }


                    }else if(field == "lastname"){

                            if(!lastname.match(nameRegex)){
                            alert("Por favor introduzca un apellido válido sin números o caracteres especiales");
                            return false;

                            }


                    }
                    else if(field == "email"){

                        let emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                        if (!email.match(emailRegex)) {
                            alert("Debe introducir un email válido");
                            return false ;
                        }



                    }else if( field == "password"){
                        var cpassword =  $("#cpassword").val();
                        if (value != cpassword) {

                                alert("Por favor contraseñas que coincidan");
                                return false;
                          }

                          let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');

                            if(!strongPassword.test(value)) {
                                alert("La contraseña debe tener al menos una mayúscula, una minúscula, un dígito , un carácter especial  y 8 caracteres de longitud");
                                return false ;
                                }



                    }
     
        }

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
        
        <main>

        <section class="short-fields-modify" >

            
        
                    
         
            <form name="modify_profile" class="modify_profile" method="POST" action="procesar_form_modificar.php" onsubmit="return validate()" >
                       
                      
                        <label class ="label_form_user" for="user">¿Está seguro/a de que desea cambiar el campo <?php echo $field ;?> ?.Introduzca el nuevo valor. </label><br>
                     
                       
                        <?php 
                            if ($field =="password"){

                                echo' <input class="input_form_modify" type=password id= "value" name= "value" />';


                                echo  '<section class="form1-section">
                                <label class ="label_form_password" for="cpassword">confirma password  </label><br>
                                <input class="input_form_modify" type="password" id="cpassword" name="cpassword" /><br>  
                              
                                </section>';
                            }else{

                                    echo ' <input class="input_form_modify" type=text id= "value" name= "value" />';

                            }
                         ?>
                        <input class="input_form_modify" type=hidden id= "user" name= "user" value= "<?php echo $user; ?>" />
                        <input class="input_form_modify" type=hidden id= "field" name= "field" value= "<?php echo $field ;?>" />




                       <!-- <label class ="label_form_user" for="password">Contraseña </label>
                        <input class="input_form_modify" type=password id= "password" name= "password" />
                        -->
                        <button class="submit-button-name" type="submit" id="submit-user" name="submit-user"   >Modificar </button>
                      


             </form>
           
          
        </section>
        
    

    
    
        </main>



        
            
            <footer class="footer">
                <a href="contacto.php" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
        </body>
    </php>


