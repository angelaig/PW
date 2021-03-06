<?php
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
       
         $(document).ready(function() {
 
                $("#submit").click(function() {
                    /*
                var user = $("#user").val();
                var name = $("#name").val();
                var lastname = $("#lastname").val();
                var password= $("#password").val();
                var cpassword = $("#cpassword").val();
                var email = $("#email").val();*/
             
               
                        user = document.forms["alta"]["user"].value;
                        name = document.forms["alta"]["name"].value;
                        lastname = document.forms["alta"]["lastname"].value;

                        password = document.forms["alta"]["password"].value;
                        cpassword = document.forms["alta"]["cpassword"].value;
                        email = document.forms["alta"]["email"].value;



                    //Campos obligatorios
                    /*
                if(user==''||name==''|| lastname==''||password==''||cpassword=='' ||email=='' ) {
                     alert("Por favor complete todos los campos  ");
                    return false;
                 }
                */

               
                if (user.length <= 3 || user.length > 20){
                    alert("Tu nombre de usuario debe tener una longitud entre 3 y 20 caracteres");
                    return false;
                }
               
                let nameRegex = /^[a-zA-Z ]{2,30}$/;

                if(!name.match(nameRegex)){
                    alert("Por favor introduzca un nombre v??lido sin n??meros o caracteres especiales");
                    return false;

                }
                if(!lastname.match(nameRegex)){
                    alert("Por favor introduzca un apellido v??lido sin n??meros o caracteres especiales");
                    return false;

                }
                
                if (password != cpassword) {

                        alert("Por favor contrase??as que coincidan");
                    return false;
                }

                let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');

                if(!strongPassword.test(password)) {
                    alert("La contrase??a debe tener al menos una may??scula, una min??scula, un d??gito , un car??cter especial  y 8 caracteres de longitud");
                    return false ;
                }


                //Validar email : expresi??n regular para validar emai
                let emailRegex = "^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$";
                if (!email.match(emailRegex)) {
                    alert("Debe introducir un email v??lido");
                    return false ;
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
                 //  alert(data);
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




            <main>

        
              
                <section class="short-fields-modify">
                    


                    <form name="alta" class="modify-user" method="POST"  >
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
                        <label class ="label_form_password" for="password">Contrase??a </label><br>
                        <input class="input_form_modify" type="password" id="password" name="password" /><br>  
                      
                        </section>
                        <section class="form1-section">
                        <label class ="label_form_password" for="cpassword">Confirma contrase??a  </label><br>
                        <input class="input_form_modify" type="password" id="cpassword" name="cpassword" /><br>  
                      
                        </section>
                        <section class="form1-section">  
                        <label class ="label_form_email" for="email">Correo </label><br>
                        <input class="input_form_modify" type="text" id="email" name="email" /><br>
                        </section>

                    </form >
         
            </section>


                 

        <section class="description-section">

        

     
        <button class="submit-button-name" type="submit" id="submit" name="submit"   >Registrar </button>

        </section>
    
        </main>



        
            
            <footer class="footer">
                <a href="contacto.php" >Contacto</a>
                <a href="../como_se_hizo.pdf" >C??mo se hizo</a>
            </footer>
        </body>
    </php>