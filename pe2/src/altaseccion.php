<?php
    session_start();
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
                        <span class="d">Muzer</span>
                       
                    </p>

               
               
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

           
            <main class="mainindex">

                

            
                    
                           
            
                                        <section class="alta-seccion-add-section"  >                                        
                                                
                                        <form  class="add-section-form" method="POST" action= "procesar_form_altaseccion.php" >
                                       
                                        <label class ="label_form_seccion" for="sname">Nombre de nueva sección </label><br>
                                        <input class="input_form_modify" type="text" id="sname" name="sname" /><br> 
                                        <button class="submit-button-name" type="submit"  id="submit" name="submit"    > Añadir </a>           
        
                                        </form >
                              
                      


                                        </section>

                                   

                                        
                               
            </main>
   
        
           
            <footer class="footer">
                <a href="contacto.html" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
          
        </body>
<php>
