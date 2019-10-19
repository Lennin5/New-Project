<?php session_start(); ?>

<?php

if (isset($_POST['enviarcomentario'])){
    error_reporting(0);
    ini_set('display_errors' , 'On');
    $id_card = $_POST["id_card"];
    $proyecto = $_POST["proyecto"];
    $project_id = $_POST["project_id"];
    $usuario = $_POST["usuario"];
    $comentario = $_POST["comentario"];

  $conexion = mysqli_connect ("localhost","root","","new_project")
  or die ("Problemas con la conexion");
  mysqli_query($conexion, "insert into comentarios(id_card,proyecto,project_id,usuario,comentario) 
    value('$id_card','$proyecto','$project_id','$usuario','$comentario')") or die ("Problemas con la Query". mysqli_error($conexion));
  ?>

<?php

        echo "<center><h4 style=\"color: white\">Se ha agregado el comentario"; echo "</h4></center>"; 
  }


    ini_set('display_errors' , 'On');
    $conexion = mysqli_connect("localhost", "root", "", "new_project") or
    die("problemas con la conexion");
    $project = mysqli_query ($conexion, "select * from project") or die("Problemas con las slq" .mysqli_error($conexion));





    ?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New_Project</title>


        <!-- CSS  Metro UI-->

  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">

  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-rtl.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">

        <!-- CSS  Materialize-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/redimid.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

        <!-- Scripts Materialize-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/inito.js"></script>

         <!-- Scripts Metro UI-->

<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>

<script type="text/javascript" src="js/jquery-3.3.1.js"></script>

          <script>

        


         $(document).ready(function(){
    // el atributo "href" del desencadenante modal debe especificar el ID modal que desea desencadenar
    $(".modal").modal({ 
      dismissible: false, // Modal puede descartarse haciendo clic fuera del modal //

    });
  });



  document.addEventListener("DOMContentLoaded", function() {
    var elems = document.querySelectorAll(".fixed-action-btn");
    var instances = M.FloatingActionButton.init(elems, {
      direction: "top",
      hoverEnabled: false
    });
  });


  $(document).ready(function(){
$(".collapsible").collapsible();
});

  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });

 
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

  $('.dropdown-trigger').dropdown();
        



function sortList(col, dir) {
    $('#paintings').data('list').sorting(col,dir,true)
}



         </script>
  </head>

<!DOCTYPE html>
<html> 
  <head>
    <meta name="utf-8">
    <title>New_Project</title>
      <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/redimid.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/inito.js"></script>

  </head>



  <body background="img/cafe3.png">




<br>


<center>
      <div class="topnav">
        <div class="">
  <a href="http://localhost/project/New_Project/" class="border-right">Perfil: <?php echo $_SESSION['usuario']['nombre']; ?><i class="material-icons">home</i></a>
            <a href="#modalayuda" class="border-right modal-trigger">Ayuda<i class="material-icons" >help_outline</i></a>
              </div>
                <a href="#modalinfo" class="modal-trigger">Info<i class="material-icons">info_outline</i></a>
                    <img src="img/NP2.png" width="125px" height="125px" class="rounded-circle">



<br><br>

                <label class="label-icon" for="search">
                    </div>
                    <center>
<div id="NELE">

  <div id="Nel" >
             
    <form autocomplete="off" action="new_project.php" autocomplete="off" method="post" >


            <input id="Sonia" type="search" placeholder="Buscar proyecto" name="palabra"
              style="color: white">

<div class="input-field">
             </div>

</div> 

<div id="Nel2">

<ul class="menu" id="cont2">

    <li>
        <a href="#" class="dropdown1" style="color: white" id="Let">Filtrar por:</a>

        <ul class="d-menu" data-role="dropdown">

            <li id="Men"><a href="http://localhost/project/New_Project/new_project_categoria.php">Categoria</a></li>
              <li class="divider"></li>
                <li id="Men"><a href="http://localhost/project/New_Project/new_project_creador.php">Creador
                </a></li>
        </ul>
    </li>
</ul>

  </div>
    </div>
      </center>
         <input type="submit" value="Explorar" class="btn deep-purple lighten-1" name="btn2">
          </form>
            </div>
              </div>
                </center>
                  </label>        



<br>


          <!-- Dropdown Trigger -->
  <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Drop Me!</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>
        

<?php


  if (isset($_POST['palabra'])) {

    include 'conexion.php';
    include 'buscar.php';

  }
?>


                      
    <br>

    <div class="fixed-action-btn">
      <a class="btn-floating btn-large deep-purple accent-4" id="Circle">
        <i class="large material-icons">menu</i>
      </a>
      <ul>
        <li><a class="btn-floating teal modal-trigger" id="Circle" title="Perfil" href="http://localhost/project/New_Project/"><i class="material-icons" >home</i></a></li>

        <li><a class="btn-floating grey darken-1 modal-trigger" id="Circle" title="Recargar" href="http://localhost/project/New_Project/new_project.php"><i class="material-icons" >refresh</i></a></li>

        <li><a class="btn-floating red modal-trigger" href="#modalcrear" id="Circle" title="Crear Proyecto">
        <i class="material-icons">border_color</i></a></li>

        <li><a class="btn-floating orange accent-4" id="Circle"
        title="Mis Proyectos" href="http://localhost/project/New_Project/mis_proyectos.php"><i class="material-icons">attach_file</i></a></li>

        <li><a class="btn-floating light-blue darken-1" id="Circle" href="http://localhost/project/New_Project/new_project.php">
          <i class="material-icons" title="Ir arriba">arrow_upward</i></a></li>
      </ul>
    </div>


      <?php

      while($reg = mysqli_fetch_array($project)){
        

      ?>


        

              <!-- Modal Crear Proyecto -->


             <div id="modalcrear" class="modal">
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

                                 <label form="nombre" style="color: white"><h6>Nombre de Usuario:</h6>
                                   <input type="text" name="nombre" autocomplete="off" id="Titulo" style="color: white" value="
                                   <?php echo $_SESSION['usuario']['nombre']; ?>">
                                 </label>

                                  <label form="project_id" style="color: white"><h6>Project_ID:</h6>
                                   <input type="number" name="project_id" autocomplete="off" id="Titulo2" style="color: white">
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

                                  html: 'ID es como una segunda contraseña que debes crear (como una contraseña de seguridad). Esta debe poseer un valor numerico en el cual tu eliges cual será, puede ser la fecha de tu cumpleaños, la fecha en la que conociste a tu mejor amigo, etc. Esta también será una herramienta que ocuparemos mas tarde'})" class="btn btn-lg" style="color: white" id="CrearBtn">
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

                      </div>
                    </div>

               <div class="modal-footer">
                 <a href="#!" style="color: white"
                 class="modal-action modal-close waves-effect btn-flat" id="VolverModal">Cancelar</a>

               </div>
             </div>
           </div>

</center>
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
                   <br>
                   <p style="color: white">Creadores de New_Project: <br><br> Rodrigo Javier Alfaro Calderón <br><br> Claudia Isabel Ascencio Solano <br><br> Lennin Josué Lemus Diaz <br><br> Mario Gerardo Martir Crespin <br><br> Samuel Francisco Pérez Guirola</p>
              </div>

              <div class="modal-footer">
                <a href="#!" style="color: white"
                class="modal-action modal-close waves-effect btn-flat" id="VolverModal">Volver</a>
              </div>
            </div>


<!-- Estructura basica de New_Project -->



<div class="row" id="Card2">
    <div class="col s12 m6">
      <div class="card">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header">

              <i class="material-icons">account_circle</i><?php  echo "Creador de proyecto: ".$reg['nombre'] ."<br>"; ?></div>

              </li>
                </ul>

        <div class="card-image">
               <img class="materialboxed" src="data:image/jpg;base64,<?php echo base64_encode($reg['Imagen']); ?>"/>
          <a class="btn-floating btn-large pulse halfway-fab waves-effect waves-light deep-purple lighten-1 modal-trigger" 
           href="#modalcomentario" onclick="Abri();"><i class="material-icons">add_comment</i></a>
          <span class="card-title">

            <script>
            function Abrir(){
              window.open("http://localhost/project/New_Project/com.php", "Hola", "width=700, height=400,           top=200, left=575");
              return false;
            }               
            </script>

            <?php  echo "Titulo: ".$reg['tema'] ."<br>"; ?>

            </span>
        </div>
        <div class="card-content">
            <?php  echo "Descripcion: ".$reg['descripcion'] .""; ?>
        </div>
        <div class="card-action">

          <ul class="collapsible">

    <li>
      <div class="collapsible-header"><i class="material-icons">vpn_key</i><?php  echo "Id_Card: ".$reg['id_card'].""; ?></div>

    </li>

    <li>
      <div class="collapsible-header"><i class="material-icons">extension</i><?php  echo "Categoria: ".$reg['categoria'].""; ?></div>

    </li>

    <li>
      <div class="collapsible-header"><i class="material-icons">question_answer</i>Comentarios</div>
      <div class="collapsible-body">
        
           <div>
      <div>
        <div>
        <div>


                <p><?php echo "Id_Card: ".$reg['id_card'] ."<br>"; ?></p>

  <p><?php echo "".$reg['usuario'].": ".$reg['comentario']."<br>"; ?></p>
    

<hr>
          </div>
          </div>
      </div>
        </div>





      </div>
    </li>


    <li>
      <div class="collapsible-header"><i class="material-icons">add_comment</i>Hacer un comentario 
    </div>


      <div class="collapsible-body">

           <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">

          <input type="text" hidden="" name="id_card" value="<?php echo "".$reg['id_card'].""; ?>"> 
          <input type="text" hidden="" name="proyecto" value="<?php  echo "".$reg['tema'] .""; ?>">
          <input type="text" hidden="" name="project_id" autocomplete="off" 
          value="<?php echo $_SESSION['usuario']['id']; ?>">
          <input type="text" hidden="" name="usuario" autocomplete="off" 
          value="<?php echo $_SESSION['usuario']['nombre']; ?>">  
          <input type="text" name="comentario" autocomplete="off" class="grey lighten-3">

        <input type="submit" value="Enviar" class="btn btn-primary deep-purple lighten-1" name="enviarcomentario">

        </form>


            </div>




          </li>
       </div>
    </div>
  </div>
</ul>


          
          


<!-- Modal de Comentarios -->



          




<!-- Fin de Modal de Comentarios -->



<?php
  }

mysqli_close($conexion);
?>

  <div id="modalcomentario" class="modal modal-fixed-footer">
    <div class="modal-content">


    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>


  </body>
</html>
