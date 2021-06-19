<?php
    session_start();
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
                   
                    <img class="logodeezer" src="../imagenes/corner-deezer.jpg">
                    <p class="titledeezer">
                        <span class="d">Muzer</span>
                       
                    </p>

               
                    <section class="sign-out">
                        <section class="box-user blue">
                            <p class="user">USER </p>
                        </section>
                     
                        <section class="admin-out" >
                        <a class="admin" href="administracion.html">Admin</a>

                        <a class="link-sign-out" href="../index.html">Sign out </a>
                        
                       </section>
                        
                    </section>



                </section>
                <nav class="categories">
                    <a class="seccion" href="seccion1.html">POP</a>
                    <a class="seccion" href="seccion2.html">ROCK</a>
                    <a class="seccion" href="seccion3.html">JAZZ</a>
                    <a class="seccion" href="seccion3.html">FUNK</a>
                    <a class="seccion" href="seccion3.html">R&B</a>
                    <a class="seccion" href="seccion3.html">FUSSION</a>
                    <a class="seccion" href="seccion3.html">FLAMENCO</a>
                </nav>



            </header>

        
        <main >
         
            
            <section class="upper-new-item">

             
                <img class="new-img-item" src="../imagenes/select-img.webp">
                  
                <input type=button class="input_form_photo" value="add photo">
                  
                <section class="short-fields">
                        
                   
                        <section class="short-fields-right" >
                            <label class ="label_form" for="name_artist">Artist </label><br>
                         
                            <label class ="label_form" for="name_genre">Genre </label><br>
                           
                            <label class ="label_form" for="name_single">Single </label><br>
                            
                
                        </section>
                        <section class="short-fields-left" >
                            <form class="new-item-register" method="POST" action="sitioweb.html">
                                    <input class="input_form_new_item" type="text" id="name_artist" name="name_artist"/><br>

                                
                                    <input class="input_form_new_item" type="text" id="name_genre" name="name_genre"/><br>
                                    
                                
                                    <input class="input_form_new_item" type="text" id="name_single" name="name_single"/><br>
                           <form class="new-item-register" method="POST" action="sitioweb.html">
                            </section>

                
                </section>
              
            </section>
                     

            <section class="description-section">

            

                <label class ="label_form" for="description_form">Descripción </label><br>
                <form class="new-item-register2" method="POST" action="sitioweb.html">
                    <textarea class="input_form_description" type="text" id="description_form" name="description_form" ></textarea>

                 
                    <input class="input_form2" type="submit" id="send_new_item" name="send_new_item" />
                </form>
             
       

            </section>
        
            </main>



        




     
          
            <footer class="footer">
                <a href="contacto.html" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
        </body>
<php>