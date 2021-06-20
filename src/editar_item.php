<?php
   // session_start();

    session_start();

    include 'items_class.inc.php';


    $oItem = Item::getItem((int)$_POST['id']);
    $id  = $oItem->getField('id');
    $artist = $oItem->getField('artist');
    $genre = $oItem->getField('genre');
    $single = $oItem->getField('single');
 
    
   
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

                

            <form name="form1" class="modify-user" method="POST"  action ="modificar_item.php">
            <section class="upper-new-item">

         
                    <section class="new-photo-user">
                    <p><input type="file"  name="image" id="image"  onchange="loadFile(event)" ></p>

                    
                    <!--<p><label for="file" style="cursor: pointer;">Upload Image</label></p>-->
                    <p><img  id="output" class="new-img-item" src="../imagenes/select-img.webp" width="200" /></p>
                    
                    </section> 



                <section class="short-fields-modify">
                 
                        <section class="form1-section">
                                <label class ="label_form_name" for="artist">Artist </label><br>
                            
                                <input class="input_form_modify" type="text" id="artist" name="artist"  value= "<?php echo $artist ;?>"  /><br> 
                                <form method="POST" action ="modificar_item.php" >
                                  <!-- id del item-->
                                <input class="input_form_modify" type="hidden"  id="id" name="id"  value= "<?php echo $id ;?>"  /><br> 
                                <input class="input_form_modify" type="hidden"  id="field" name="field"  value= "artist"  /><br> 
                                <!-- campo que se va a modificar -->
                                <button class="submit-button-name" type="submit"  >Modificar </button>
                                </form>
                    
                        </section>

                        <section class="form1-section">
                                    <label class ="label_form_name" for="genre">Genre </label><br>
                                  
                                    <input class="input_form_modify" type="text" id="genre" name="genre"  value= "<?php echo $genre; ?>" />
                                    <form method="POST" action ="modificar_item.php" >
                
                                    <input class="input_form_modify" type="hidden"  id="id" name="id"  value= "<?php echo  $id; ?>"  /><br>
                                    <button class="submit-button-name" type="submit" id="field" name="field" value="genre"   >Modificar </button>
                                    </form> 
                        </section>
                   
                        <section class="form1-section">
                                    <label class ="label_form_lastname" for="single">Single </label><br>
                                 
                                    <input class="input_form_modify" type="text" id="single" name="single"  value= "<?php echo $single; ?>" /><br>
                                    <form method="POST" action ="modificar_item.php" >
                                    <input class="input_form_modify" type="hidden"  id="id" name="id"  value= "<?php echo $id ;?>"  /><br>

                                    <button class="submit-button-name" type="submit" id="field" name="field" value="single"  >Modificar </button>
                                 
                                    </form>
                        </section>
                     

             


                </section>
                
            </section>
         
        </form >





                               
            </main>
   
        
           
            <footer class="footer">
                <a href="contacto.html" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
          
        </body>
<php>


