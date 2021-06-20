<?php
   // session_start();

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

                

                    
                
            
                                        <section class="alta-seccion"  >                                        
                                        <form  class="add-section-form" method="POST" action="procesar_form_editarseccion.php"   >
                                       
                                        <label class ="label_form_seccion" for="newsname">Escriba el nuevo nombre de la   seccióooon <?php echo $_POST['sname']; ?>  </label><br>
                                        <input class="input_form_modify" type="text" id="newsname" name="newsname" /><br> 
                                        <input class="input_form_modify" type="hidden" id="sname" name="sname" value =<?php echo $_POST['sname'];?>  /><br> 
                                        <button class="submit-button-name" type="submit"    id="submit" name="submit"    > Editar </button>           
        
                                        </form >
                              
                      


                                        </section>




                               
            </main>
   
        
           
            <footer class="footer">
                <a href="contacto.html" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
          
        </body>
<php>

