<?php session_start(); ?>
<html>
<head>
  <title>Mis Proyectos</title>
<head>
        <!-- CSS  Metro UI-->

  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">

  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-rtl.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">
           <!-- Scripts Metro UI-->

<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>

        <!-- CSS  Materialize-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/go.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

        <!-- Scripts Materialize-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>



<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });

    $(document).ready(function(){
    $('.materialboxed').materialbox();
  });

        


</script>

</head>

  <body background="img/Pink.jpg">

<br>

        
<center>
      <div class="topnav" id="myTopnav">
        <div class="">
  <a href="http://localhost/project/New_Project/" class="border-right">Perfil: <?php echo $_SESSION['usuario']['nombre']; ?><i class="material-icons">home</i></a>
            <a href="#modalcrear" class="border-right modal-trigger">Mi Project_ID<i class="material-icons" >help_outline</i></a>
              </div>

                    <img src="img/NP2.png" width="125px" height="125px" class="rounded-circle">


       <div class="nav-wrapper">
         
                        </div>
                          </div>
                        </center>
    
<br><br>


    <center><h1 style="color: white">Bienvenido <?php echo $_SESSION['usuario']['nombre']; ?>! <br>
    <h2 style="color: white">Para ver tus proyectos ingresa tu Project_ID: <?php echo $_SESSION['usuario']['id']; ?></h2>
      <br>
    </h1></center>

    <form method="POST" action="mis_proyectos.php">

    <div class="form-group">
      <center>
      <input type="text" name="project_id" hidden="0" class="form-control" id="MissB" autocomplete="off" style="color: white" value="<?php echo $_SESSION['usuario']['id']; ?>">
      <input type="submit" value="Explorar" class="btn deep-purple lighten-1" name="btn2">

    </center>

  </form>
    <br>
  


  <?php

    if(isset($_POST['btn1']))
    {
      include("abrir_conexion.php");



      mysqli_query($conexion, "INSERT INTO $tabla_db1 (nombre,tema,descripcion,project_id,Imagen) 
        values ('$nombre','$tema','$descripcion','$Imagen')");
      //La variable $Conexion viene del archivo "Abrir_Conexion", la cual nos conectara a la base de datos
      //y de paso hacemos el registro de datos.
      
      include("cerrar_conexion.php");
      echo "Se insertaron Correctamente";
    }

    if(isset($_POST['btn2']))
    {
      include("abrir_conexion.php");

        $project_id = $_POST['project_id'];
        if($project_id=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
          {echo "<center><h4 style=\"color: white\">Error: Ingresa tu Project_ID</h4></center>";}
        else
        {  
          $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE project_id = $project_id");
          while($consulta = mysqli_fetch_array($resultados))
          { ?>
          
  
<center>
              <div class="row\" id="Card2">
    <div class="col s12 m6">
      <div class="card">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">account_circle</i>
            <td> Creador: <?php echo $_SESSION['usuario']['nombre']; ?> </td></div>
              </li>
                </ul>

        <div class="card-image">

              <img class="materialboxed" src="data:image/jpg;base64,<?php echo base64_encode($consulta['Imagen']); ?>"/>
          
          <a class="btn-floating btn-large pulse halfway-fab waves-effect waves-light deep-purple lighten-1 modal-trigger"
            href="#modalcomentarios"><i class="material-icons">add_comment</i></a>
          <span class="card-title">
            <td> <?php echo "Tema: ".$consulta['tema'] ."<br>"; ?> </td>

            </span>
        </div>
      

        <div class="card-content">
            <td> <?php echo "Descripcion: ".$consulta['descripcion'] ."<br>"; ?></td>
        </div>
        <div class="card-action">

          <ul class="collapsible">

    <li>
      <div class="collapsible-header"><i class="material-icons"></i>
      <td> <?php echo "Categoria: ".$consulta['categoria'] ."<br>"; ?> </td></div>

    </li>


    <li>
      <div class="collapsible-header"><i class="material-icons">
      </i>
      <td><?php echo "Project_ID: ".$consulta['project_id'] ."<br>"; ?></td>
    </div>

    </li>


        </div>
      </div>
    </div>
  </div>
</ul>
</center>

    <?php 

          }
        }

      include("cerrar_conexion.php");
    }
  ?>



  </div>
  <div class="col-md-4"></div>
</div>


            <div id="modalcrear" class="modal modal-fixed-footer">
              <div>
         <center>
           <li><h4 class="modal-trigger" style="color: white">
             <i class="small material-icons" style="color: white">help_outline</i>Mi Project_ID</h4></li>
        </center>
                   <li><div class="divider"></div></li>
                   <h3 style="color: white">Project_ID es un ID que genera nuestro portal a partir del ID que ingresaste al registrar esta cuenta, el ID es único para que puedas ver y compartir tus proyectos con el mundo <br><br> ¿Que fin tiene esto? Hacer un poco mas dinamico nuestro portal, al hacer que el usuario interaccione de una manera un tanto diferente a como comunmente lo hace, nunca va mal algo fuera de lo común ¿Verdad?
                  </h3>
              </div>
              <div class="modal-footer">
                <a href="#!" style="color: white"
                class="modal-action modal-close waves-effect btn-flat" id="VolverModal">Volver</a>
              </div>
  
  
</body>
</html>