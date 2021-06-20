<?php
    session_start();
     
    include_once 'sections_class.inc.php';
    include_once 'items_class.inc.php';

    $section = $_POST["sname"];
?>

<!doctype php>
    <php>
        <head>
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

                 

            <section class="name-section">
                 <?php echo $_POST["sname"]; ?>
            </section>
            </header>
   
  
         <main>
                
                <?php 
                              $items = Item::getAllItemsSection($section);

                              $n = sizeof($items);
                              echo $n ;
                              for ($x = 0; $x < $n; $x+=3) {
      
                              echo '<section class="itemsrow">';

                                                 for ( $j=0 ; $j < 3 ; $j++) {
                                                     if( $x+$j < $n){
                                                    echo     '<section class="item2" href="itemx.php" >                                        
                                                        <img class="imgitem" src="../imagenes/'.$items[$x+$j]["img"] .'"> 
                                                            

                                                        <form method = "POST" action = "itemx.php" >
                                                                <button class="title2-button" type="submit" id="id" name="id"  value ='.$items[$x+$j]["id"].'>
                                                                '.  $items[$x+$j]["artist"] .'
                                                                </button><br>
                                                        </form>
                                                                <p class="description-single">
                                                                '.  $items[$x+$j]["single"] .'
                                                                </p>
                                                              
                                                               
                                                               
                                                        </section>';
                                                     }
                                                 }
                            

                              echo  '</section>';
                              }  
               
     
                ?>









            <section class="navigate-pages">


            <?php 


                $secciones = Section::getAllSections();
                $n = sizeof($secciones);

              echo   '<section class="navigate-pages">
              

                <form method = "POST" action =  "seccionx.php" >
                    <button class="actividad primera-actividad" type="submit" id="sname" name="sname" value ="'.$secciones[0]["sname"].'" >
                     <img class="arrows" src="../imagenes/left.png"></button>
                 </form>';
                  
               
                for ($x = 0; $x < $n; $x++) {

                    echo '
                    <form method = "POST" action =  "seccionx.php" >
                    <button class="actividad primera-actividad" type="submit" id="sname" name="sname" value ="'.$secciones[$x]["sname"].'" >'.$x .'</button>
                    </form>';
                }
                echo'
                <form method = "POST" action =  "seccionx.php" >
                <button class="actividad primera-actividad" type="submit" id="sname" name="sname" value ="'.$secciones[$n-1]["sname"].'" >
                 <img class="arrows" src="../imagenes/right.png"></button>
                </form> </section>';


        ?>

        </main>
            <footer class="footer">
                <a href="contacto.php" >Contacto</a>
                <a href="../como_se_hizo.pdf" >Cómo se hizo</a>
            </footer>
              
      </body>
      </php>
