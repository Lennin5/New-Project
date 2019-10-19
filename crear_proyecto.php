<?php session_start(); ?>
<html>
<head>
  <title>Crear Proyecto</title>

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
  <link href="css/xz.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

        <!-- Scripts Materialize-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</head>

  <body id="Ground">

<br>

<center>
      <div class="topnav">
        <div class="">
  <a href="http://localhost/project/New_Project/" class="border-right">Perfil: <?php echo $_SESSION['usuario']['nombre']; ?><i class="material-icons">home</i></a>
            <a href="#modalayuda" class="border-right modal-trigger">Ayuda<i class="material-icons" >help_outline</i></a>
              </div>
                <a href="#modalinfo" class="modal-trigger">Info<i class="material-icons">info_outline</i></a>
                    <img src="img/NP2.png" width="125px" height="125px" class="rounded-circle">





                <label class="label-icon" for="search">
                    </div>
                    <center>
<br>

                <li><h1 class="modal-trigger" style="color: white">
              <i class="material-icons" style="color: white">border_color</i>_Crear Proyecto</h1></li>

</center></label></div></center>

<br>

<center>
<div id="Log">
  
  <div class="row deep-purple lighten-1">
    <form class="col s12" action="guardar_proyecto.php" method="post" enctype="multipart/form-data">

      <div class="row" id="Dimo">

        <div class="input-field col s6">
          <label form="tema" style="color: white"><h6>Titulo de proyecto:</h6>
             <input type="text" name="tema" autocomplete="off" id="Titulo" style="color: white">
                 </label>
        </div>

        <div class="input-field col s6">
          <label form="categoria" style="color: white"><h6>Categoria:</h6>
             <input type="text" name="categoria" autocomplete="off" id="Titulo" style="color: white">
                 </label>
        </div>

      </div>


</div>
</form>
</div>
</div>
</center>


</body>
</html>