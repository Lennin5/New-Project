
<?php
  error_reporting(E_ALL);
  ini_set('display_errors' , 'On');
  $nombre = $_REQUEST['nombre'];
  $project_id = $_REQUEST['project_id'];
  $tema = $_REQUEST['tema'];
  $descripcion = $_REQUEST['descripcion'];
  $categoria = $_REQUEST['categoria'];
  $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
  
  $conexion = mysqli_connect ("localhost","root","","new_project")
  or die ("Problemas con la conexion");
  mysqli_query($conexion, "insert into project(nombre,project_id,tema,descripcion,categoria,Imagen)
  value('$nombre','$project_id','$tema','$descripcion','$categoria','$Imagen')") or die ("Problemas con la Query". mysqli_error($conexion));
  echo ""
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/redimid.css" type="text/css" rel="stylesheet" media="screen,projection"/>

      <!-- Scripts -->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>
      <script>
                 $(document).ready(function(){
    // el atributo "href" del desencadenante modal debe especificar el ID modal que desea desencadenar
    $(".modal").modal({
      dismissible: false, // Modal puede descartarse haciendo clic fuera del modal //

    });
  });
      </script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      </head>
  <body background="img/Pink2.jpg">

  <div class="col s12 m7">
    <h2 class="header" style="color: white">Proyecto Publicado!</h2>

    <div class="progress">
      <div class="indeterminate deep-purple"></div>
      </div>

    <div class="card horizontal">
      <div class="card-image">
        <img src="img/NP3.png" >
        <a class="btn-floating btn-large pulse halfway-fab waves-effect waves-light deep-purple lighten-1 modal-trigger"
            href="#modalcafe" id="Circle"><i class="material-icons">local_cafe</i></a>
      </div>
      <div class="card-stacked">
        <div class="card-content deep-purple lighten-4">


           Felicidades! Su proyecto se ha publicado con exito, puede darle una vista previa clickeando el boton de "Ver Proyectos", o puede regresar a su perfil clickeando "Mi Perfil"</p>
        </div>
        <div class="card-action deep-purple lighten-4">
          <a class="waves-effect waves-light btn deep-purple lighten-1"
          href="http://localhost/project/New_Project/index.php"><i class="material-icons left">border_color</i>Mi Perfil</a>

          <a class="waves-effect waves-light btn deep-purple lighten-1"
          href="http://localhost/project/New_Project/new_project.php"><i class="material-icons left">photo_library</i>Ver Proyectos</a>

        </div>
      </div>
    </div>
  </div>


           <div id="modalcafe" class="modal modal-fixed-footer">
              <div>
         <center>
           <li><h4 class="modal-trigger" style="color: white">
             <i class="small material-icons" style="color: white">local_cafe</i>¿Por que una taza de cafe?</h4></li>
        </center>
                   <li><div class="divider"></div></li>


              </div>

              <div class="modal-footer">
                <a href="#!" style="color: white"
                class="modal-action modal-close waves-effect btn-flat" id="VolverModal">Volver</a>
              </div>
            </div>

            <div class="progress">
              <div class="indeterminate deep-purple"></div>
              </div>

</body>
</html>
