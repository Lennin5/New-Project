<?php

    error_reporting(E_ALL);
    ini_set('display_errors' , 'On');
    $conexion = mysqli_connect("localhost", "root", "", "new_project") or
    die("problemas con la conexion");
    $project = mysqli_query ($conexion, "select id_card, nombre, project_id, tema, descripcion, categoria, Imagen from
    project") or die("Problemas con las slq" .mysqli_error($conexion));
    ?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


        <!-- CSS  Metro UI-->

  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">

  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-rtl.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">

        <!-- CSS  Materialize-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/redimid.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

        <!-- Scripts Materialize-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

         <!-- Scripts Metro UI-->

<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>

  </head>
  <body>

<!DOCTYPE html>
<html>
  <head>
    <meta name="utf-8">
    <title>Carnets</title>
  </head>
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/go.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <script>

        $(document).ready(function(){
           $(".sidenav").sidenav();
         });

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

        var instance = M.Modal.getInstance(elem);

M.toast({html: 'toast'})
         </script>

  <body background="img/cafe3.png">

<br>
<center>
      <div class="topnav" id="myTopnav">
        <div class="">
  <a href="http://localhost/project/New_Project/new_project_blocked.php" class="border-right">
    Recargar<i class="material-icons">refresh</i></a>

            <a href="#modalayuda" class="border-right modal-trigger">Ayuda<i class="material-icons" >help_outline</i></a>
              </div>
                <a href="#modalinfo" class="modal-trigger">Info<i class="material-icons">info_outline</i></a>
                    <img src="img/NP2.png" width="125px" height="125px" class="rounded-circle">

<br><br>

                <label class="label-icon" for="search">
                    </div>


    <form autocomplete="off" action="new_project_blocked.php" autocomplete="off" method="post">
    <div class="form-group">
      <center>
            <input id="MissW" type="search" placeholder="Buscar..." name="palabra"
              style="color: white">
                    <input type="submit" value="Explorar" class="btn deep-purple lighten-1" name="btn2">
        </center>
            </form>
                </div>

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

        <li><a class="btn-floating red modal-trigger" href="#!" id="Circle" title="Crear Proyecto" onclick="M.toast({html: 'Si quieres subir tu proyecto debes crear una cuenta'})">
        <i class="material-icons">border_color</i></a></li>

        <li><a class="btn-floating orange accent-4" id="Circle"
        title="Mis Proyectos" href="#!" onclick="M.toast({html: 'Si quieres ver tus proyectos debes crear una cuenta'})"><i class="material-icons">attach_file</i></a></li>

        <li><a class="btn-floating light-blue darken-1" id="Circle" href="http://localhost/project/New_Project/new_project_blocked.php">
          <i class="material-icons" title="Ir arriba">arrow_upward</i></a></li>
      </ul>
    </div>


      <?php
      while($reg = mysqli_fetch_array($project)){
      ?>



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

                                 <label form="nombre" style="color: white"><h6>Nombre de Usuario:</h6>
                                   <input type="text" name="nombre" autocomplete="off" id="Titulo" style="color: white">
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
             <i class="small material-icons" style="color: white">help_outline</i>Preguntas Frecuentes</h4></li>
        </center>
                   <li><div class="divider"></div></li>
                   <p style="color: white">Crear Proyecto: Puedes escribir tu proyecto y publicarlo para compratirlo con otras personas</p>
                   <p>Ver Proyecto: Puedes ver, editar y compartir tus proyectos publicados</p>
                   <p>Salir: Cerrar sesion</p>
                   <p>Categorias: New-Project ofrece diferentes categorias donde puedes publicar tus proyetos</p>
                   <center><p>Por ejemplo</p></center>
                   <center><p>Matematicas, Ciencia, Sociales, Arte, Musica, Poesia</p></center>
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
             <i class="small material-icons" style="color: white">help_outline</i>Preguntas Frecuentes</h4></li>
        </center>
                   <li><div class="divider"></div></li>
                   <p>New-Project Ofrece a sus usuarios expresar y dar a conocer sus diferentes
                   talentos enfocado en diferentes categorias</p>
                   <br>
                   <p>Creadores de New_Project: <br><br> -Rodrigo Javier Alfaro Calderón <br><br> -Claudia Isabel Ascencio Solano <br><br> -Lennin Josué Lemus Diaz <br><br> -Mario Gerardo Martir Crespin <br><br> -Samuel Francisco Pérez Guirola</p>
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
            <div class="collapsible-header"><i class="material-icons">account_circle</i><?php  echo "Creador de proyecto: ".$reg['nombre'] ."<br>"; ?></div>
              </li>
                </ul>

        <div class="card-image">
               <img class="materialboxed" src="data:image/jpg;base64,<?php echo base64_encode($reg['Imagen']); ?>"/>
          <a class="btn-floating btn-large pulse halfway-fab waves-effect waves-light deep-purple lighten-1 modal-trigger"
            href="#modalcomentarios"><i class="material-icons">add_comment</i></a>
          <span class="card-title">
            <?php  echo "Titulo: ".$reg['tema'] ."<br>"; ?>

            </span>
        </div>
        <div class="card-content">
            <?php  echo "Descripcion: ".$reg['descripcion'] .""; ?>
        </div>
        <div class="card-action">

          <ul class="collapsible">

    <li>
      <div class="collapsible-header"><i class="material-icons"></i><?php  echo "Categoria: ".$reg['categoria'].""; ?></div>

    </li>

    <li>
      <div class="collapsible-header"><i class="material-icons"></i>Ratear Proyecto!</div>
      <div class="collapsible-body"><input data-role="rating" data-values="0.1, 0.2, 0.3, 0.4, 0.5"  data-star-color="yellow"></div>
    </li>


    <li>
      <div class="collapsible-header"><i class="material-icons"></i>Comentarios:
    </div>


      <div class="collapsible-body"><?php echo "Los comentarios estaran disponibles en proximas actualizaciones"; ?>

      </div>
    </li>


        </div>
      </div>
    </div>
  </div>
</ul>


<!-- Modal de Comentarios -->

  <div id="modalcomentarios" class="modal bottom-sheet">
    <div class="modal-content">

      <h4>Escribir un comentario:    No disponible</h4>
        <form method="post" action="guardar_comentarios2.php">
          <input type="text" name="comentario" autocomplete="off">
                                 <div class="modal-footer">
      <a href="#!" class="modal-close btn-flat" id="VolverModal" style="color: white">Volver</a>
    </div>
       </form>

    </div>

  </div>

<!-- Fin de Modal de Comentarios -->



<?php
    
  }
mysqli_close($conexion);
?>





  </body>
</html>
