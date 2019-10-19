<?php
if (isset($_POST['enviarcomentario'])){
    error_reporting(0);
    ini_set('display_errors' , 'On');
    $id = $_POST["id"];
    $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

  $conexion = mysqli_connect ("localhost","root","","new_project")
  or die ("Problemas con la conexion");
  mysqli_query($conexion, "insert into circle(id_circle,img) 
    value('$id','$Imagen')") or die ("Problemas con la Query". mysqli_error($conexion));
  ?>

<?php

        echo "<center><h4 style=\"color: white\">Imagen de perfil cambiada"; echo "</h4></center>"; 
  }

if(empty($conexion))return;
?>

 <?php
     error_reporting(E_ALL);
     ini_set('display_errors' , 'On');
     $conexion = mysqli_connect("localhost", "root", "", "new_project") or
     die("problemas con la conexion");

    $usuarios = mysqli_query($conexion, "select id, username, img from usuarios") or die("Problemas con las slq" .mysqli_error($conexion));

 
$reg = mysqli_fetch_array($usuarios);


?>

     
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New_Project- Home</title>
    <link rel="icon" href="../img/NP3.png">
  </head> 
  <body id="Ground">

<br>

<center>
      <div class="topnav" id="myTopnav">
        <div class="">
          <a href="#" data-target="slide-out" class="sidenav-trigger border-right">Menu<i class="material-icons">menu</i></a>
            <a href="#modalayuda" class="border-right modal-trigger">Help<i class="material-icons" >help_outline</i></a>
              </div>
                <a href="#modalinfo" class="border-right modal-trigger">Info<i class="material-icons">info_outline</i></a>
                    <img src="img/NP2.png" width="125px" height="125px" class="rounded-circle">

                        </div>
                        </center>
    <br>


  

     <ul id="slide-out" class="sidenav deep-purple lighten-1">
         <li><div class="user-view">
           <div class="background">
           </div>


           <center>
  <img class="circle" id="Elliot" src="data:image/jpg;base64,<?php echo base64_encode($reg['img']); ?>"/>

                        <!-- src="data:image/jpg;base64,<?php echo base64_encode($reg['Imagen']); ?>" -->
         </center>

           <h4 style="color: white" class="text-center"><?php echo $_SESSION['usuario']['nombre']; ?></h4>

           <li><div class="divider"></div></li>
         </div></li>

         <li><a href="#modalcrear" class="modal-trigger" style="color: white">
           <i class="material-icons" style="color: white">border_color</i>Create Project</a></li>

         <li><a href="http://localhost/project/New_Project/new_project.php" style="color: white"><i class="material-icons" style="color: white">photo_library</i>See Projects</a></li>
        
          <li><a href="http://localhost/project/New_Project/mis_proyectos.php" style="color: white"><i class="material-icons" style="color: white">attach_file</i>My Projects</a></li>

         <li><a href="salir.php" style="color: white"><i class="material-icons" style="color: white">power_settings_new</i>Sign Out</a></li>

         <li><div class="divider"></div></li>
         <center>
         <li><h5 href="#!" style="color: white">Project_ID:</h5></li>

       </center>  

                                     <center><a
                               style="color: white" class="btn" id="CrearBtn"><?php echo $_SESSION['usuario']['id'];?></a>

                              
</center>
         <li><a href="#!" style="color: white"

          onclick="M.toast({

                                
                                displayLength: 10000,
                                inDuration: 370,
                                outDuration: 370,

                                html: 'Project_ID es un ID que genera nuestro portal a partir del ID que ingresaste al registrar esta cuenta, el ID es único para que puedas ver y compartir tus proyectos con el mundo <br> ¿Que fin tiene esto? Hacer un poco mas dinamico nuestro portal, al hacer que el usuario interaccione de una manera diferente a como comunmente lo hace, nunca va mal algo fuera de lo común ¿Verdad?'
                                  
                             })"><i class="material-icons" style="color: white">import_contacts</i>What is Project_ID?</a></li>

         <li><a href="#!" style="color: white"

          onclick="M.toast({

                                
                                displayLength: 10000,
                                inDuration: 370,
                                outDuration: 370,

                                html: 'Creadores de New_Project: <br><br> Rodrigo Javier Alfaro Calderón <br><br> Claudia Isabel Ascencio Solano <br><br> Lennin Josué Lemus Diaz <br><br> Mario Gerardo Martir Crespin <br><br> Samuel Francisco Pérez Guirola'
                                  
                             })"><i class="material-icons" style="color: white">lock_outline</i>Creators</a></li>

       </ul>



            <!-- Modal Crear Proyecto -->


             <div id="modalcrear" class="modal ">
               <div>
          <center>
            <li><h4 class="modal-trigger" style="color: white">
              <i class="material-icons" style="color: white">border_color</i>_Crear Proyecto</h4></li>
         </center>
                    <li><div class="divider"></div></li>
<center>
<br>

                      <div class="row">
                    <div class="col s19">
                             <div class="container" id="LineL">

                               <form action="guardar_proyecto.php" method="post" enctype="multipart/form-data">

                                 <label  form="nombre" style="color: white">
                                  <h6>Nombre de Usuario:</h6>
                                   <input type="text" name="nombre" autocomplete="off" id="Titulo" style="color: white" value="<?php echo $_SESSION['usuario']['nombre']; ?>">
                                 </label>

                                  <label form="project_id" style="color: white">
                                    <h6>Project_ID:</h6>
                                   <input type="number" name="project_id" autocomplete="off" id="Titulo2" style="color: white" value="<?php echo $_SESSION['usuario']['id']; ?>">
                                 </label>

                                 <label form="tema" style="color: white"><h6>Titulo de proyecto:</h6>
                                   <input type="text" name="tema" autocomplete="off" id="Titulo" style="color: white">
                                 </label>

                                  <label form="descripcion" style="color: white"><h6>Descripcion:</h6>
                                   <input type="text" name="descripcion" autocomplete="off" id="Titulo" style="color: white">
                                 </label>
                                   <a title="Click Me!" onclick="M.toast({

                               displayLength: 10500,
                                inDuration: 370,
                                outDuration: 370,

                                  html: 'Project_ID es un ID que genera nuestro portal para los usuarios, el ID es único para que puedas ver y compartir tus proyectos con el mundo <br> Si observas en el Menu, tu Project_ID estara encerrado en un rectangulo'})" class="btn btn-lg" style="color: white" id="CrearBtn">
                                ¿Project_ID?</a>


                                 <label form="categoria" style="color: white"><h6>Categoria:</h6>
                                  <input type="text" name="categoria" autocomplete="off" id="Titulo" style="color: white">
                                 </label>

                                <label form="Imagen" style="color: white"><h6>Imagen de Proyecto:</h6>
                                 <input type="file" REQUIRED name="Imagen" id="IMagen">
                               </label>

                               <input type="submit" value="Crear" class="btn btn-primary" id="CrearBtn">

                             </form>
                          </div>
                        </div>
                        <center>

                      </center>
                      </div>
                    </div>

               <div class="modal-footer">
                 <a href="#!" style="color: white"
                 class="modal-action modal-close waves-effect btn-flat" id="VolverModal">Cancelar</a>

               </div>

</center>
</div>
</div>


  

            <div class="row" id="Card">
              <div class="col s12 m7">
                <div class="">
                  <div>
                  <div class="card-image">
                    <div class="slider">
                      <ul class="slides transparent">
                        <li>
                          <img src="imagenes/stars.jpg" > <!-- random image -->
                          <div class="caption center-align">
                            <h2>Welcome</h2>
                            <h5 class="light grey-text text-lighten-3">upload your creativity to the server</h5>
                          </div>
                        </li>
                        <li>
                          <img src="imagenes/stars.jpg"> <!-- random image -->
                          <div class="caption center-align">
                            <h2>Create amazing projects</h2>
                            <h5 class="light grey-text text-lighten-3">and share them with the world</h5>
                          </div>
                        </li>
                        <li>
                          <img src="imagenes/stars.jpg"> <!-- random image -->
                          <div class="caption center-align">
                            <h2>Press "Menu" to start</h2>
                            <h5 class="light grey-text text-lighten-3"></h5>
                          </div>
                        </li>
                        <li>
                          <img src="imagenes/stars.jpg"> <!-- random image -->
                          <div class="caption center-align">
                            <h2>The best factory of the imagination</h2>
                            <h5 class="light grey-text text-lighten-3">it's the human mind</h5>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                    <span class="card-title"></span>
                  </div>
                </div>

                </div>
              </div>

            </div>

            <!-- Modal Ayuda -->

            <div id="modalayuda" class="modal modal-fixed-footer">
              <div>
         <center>
           <li><h4 class="modal-trigger" style="color: white">
             <i class="small material-icons" style="color: white">help_outline</i>Ayuda</h4></li>
        </center>
                   <li><div class="divider"></div></li>
                   <p style="color: white">Crear Proyecto: Puedes escribir tu proyecto y publicarlo para compratirlo con otras personas</p>
                   <p style="color: white">Ver Proyecto: Puedes ver, editar y compartir tus proyectos publicados</p>
                   <p style="color: white">Salir: Cerrar sesion</p>
                   <p style="color: white">Categorias: New-Project ofrece diferentes categorias donde puedes publicar tus proyetos</p>
                   <center><p style="color: white">Por ejemplo</p></center>
                   <center><p style="color: white">Matematicas, Ciencia, Sociales, Arte, Musica, Poesia</p></center>
                   <!-- Aqui va la information -->
              </div>
              <div class="modal-footer">
                <a href="#!" style="color: white"
                class="modal-action modal-close waves-effect btn-flat" id="VolverModal">Volver</a>
              </div>
            </div>





            <!-- Modal Informacion -->

            <div id="modalinfo" class="modal modal-fixed-footer">
              <div>
         <center>
           <li><h4 class="modal-trigger" style="color: white">
             <i class="small material-icons" style="color: white">help_outline</i>Acerca de</h4></li>
        </center>
                   <li><div class="divider"></div></li>
                   <p style="color: white">New-Project Ofrece a sus usuarios expresar y dar a conocer sus diferentes
                   talentos enfocado en diferentes categorias</p>
                   <p style="color: white">Creadores de New_Project: <br><br> Rodrigo Javier Alfaro Calderón <br><br> Claudia Isabel Ascencio Solano <br><br> Lennin Josué Lemus Diaz <br><br> Mario Gerardo Martir Crespin <br><br> Samuel Francisco Pérez Guirola</p>
              </div>

              <div class="modal-footer">
                <a href="#!" style="color: white"
                class="modal-action modal-close waves-effect btn-flat" id="VolverModal">Volver</a>
              </div>
            </div>

  <!-- Modal Trigger -->

  <!--
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

  <!-- Modal Structure 
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
          <input type="text"  name="id" value="<?php echo $_SESSION['usuario']['id']; ?>"> 
          <input type="file" REQUIRED name="Imagen" id="IMagen">

        <input type="submit" value="Enviar" class="btn btn-primary deep-purple lighten-1" name="enviarcomentario">

        </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
          

-->


  </body>
</html>
