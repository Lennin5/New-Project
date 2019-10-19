<?php if(empty($conexion))return;?>


<html lang="en" dir="ltr">
  <head>
    
  <meta charset="utf-8">
      <title></title>
          
    <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>


    <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  </head>

  <body background="img/Pink2.jpg">

<br>

<center>
      <div class="topnav" id="myTopnav">
        <div class="">
          <a href="http://localhost/project/New_Project/" class="border-right">Recargar<i class="material-icons">refresh</i></a>
            <a href="#modalayuda" class="border-right modal-trigger">Ayuda<i class="material-icons">help_outline</i></a>
              </div>
                <a href="#modalinfo" class="modal-trigger">Info<i class="material-icons">info_outline</i></a>
                    <img src="img/NP2.png" width="125px" height="125px" class="rounded-circle" id="Logo">
                  </div>
                  </center>

<br><br>

<div id="Frases">

  <div class="slider">
    <ul class="slides transparent">
      <li>
        <img src="imagenes/stars.jpg" > <!-- random image -->
        <div class="caption center-align">
          <h2>Crea, Comparte, Descubre</h2>
          <h5 class="light grey-text text-lighten-3">New Project</h5>
        </div>
      </li>
      <li>
        <img src="imagenes/stars.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2>La mente humana es simplemente</h2>
          <h5 class="light grey-text text-lighten-3">una gran creacion de Dios</h5>
        </div>
      </li>
      <li>
        <img src="imagenes/stars.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2>Abre tu mente al mundo</h2>
          <h5 class="light grey-text text-lighten-3">y el mundo te conocera</h5>
        </div>
      </li>
      <li>
        <img src="imagenes/stars.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2>La mejor fabrica de la imaginacion</h2>
          <h5 class="light grey-text text-lighten-3">es la mente humana</h5>
        </div>
      </li>
    </ul>
  </div>
</div>
<br>

 <div id="translucent-form-overlay">
    <section>
        <section class="container">
            <section class="row justify-content-center">
                <section class="col-auto">
                  <div id="Botones">
                    <ul class="nav nav-pills mb-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active deep-purple lighten-1" id="pills-login-tab" data-toggle="pill" href="#pills-login"
                            role="tab" aria-controls="pills-login" aria-selected="true" style="color: white">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pink accent-2" id="pills-registro-tab" data-toggle="pill" href="#pills-registro"
                            role="tab" aria-controls="pills-registro" aria-selected="false" style="color: white">Registro</a>
                        </li>
                      </ul>
                  </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">

                            <form action="trafic.php" method="post" autocomplete="off">
                                <div class="form-group">
                                    <label style="color: white">Nombre de usuario
                                        <input type="text" name="usuario" class="form-control" required maxlength="100" id="Input">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label style="color: white">Contraseña
                                        <input type="password" name="acceso" class="form-control" required maxlength="100" id="Input">
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-lg deep-purple lighten-1">
                                <input type="hidden" name="=ruT*vetR56T" value="Ga7Rux8+eSeF">

                          <li class="nav-item">
                            <a class="nav-link cyan accent-4" href="http://localhost/project/New_Project/new_project_blocked.php" style="color: white" id="Omitir">Ingresar sin registrar</a>
                          </li>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="pills-registro" role="tabpanel" aria-labelledby="pills-registro-tab">

                            <form action="trafic.php" method="post" autocomplete="off">
                                <div class="form-group">
                                    <label style="color: white">Nombre de usuario
                                        <input type="text" name="usuario" class="form-control" required maxlength="100" id="Input2">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label style="color: white">Contraseña
                                        <input type="password" name="acceso" class="form-control" required maxlength="100" id="Input2">
                                      </label>
                                      </div>


                                      
                                <input type="submit" class="btn btn-lg pink accent-2">
                                <input type="hidden" name="t#zuT7athahU" value="VezuY$Ve2en!" class="btn btn-lg brown">
                                                                

                            </form>
                            


                        </div>
                    </div>
                </section>
            </section>
        </section>
    </section>
</div>

 <!-- Modal Ayuda -->

            <div id="modalayuda" class="modal modal-fixed-footer">
              <div>
         <center>
           <li><h4 class="modal-trigger" style="color: white">
             <i class="small material-icons" style="color: white">help_outline</i>Ayuda</h4></li>
        </center>
                   <li><div class="divider"></div></li>
                   <h5 style="color: white">New_Project es un portal web dedicado a la creacion de proyectos de una manera simple y minimalista, en este portal podras dar a conocer tu creatividad desde como hacer una receta de cocina, hasta compartir tus conocimientos en los diferentes campos.<br><br> Con New_Project podras darte a conocer creando lo que desees, aplicando descripciones y categorias a tus proyectos para ampliar su informacion</h5>
</center>
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
                   talentos enfocado en diferentes categorias como arte, musica, pensamientos, materias escolares, etc.</p>
                   <p style="color: white">Creadores de New_Project: <br><br> -Rodrigo Javier Alfaro Calderón <br><br> -Claudia Isabel Ascencio Solano <br><br> -Lennin Josué Lemus Diaz <br><br> -Mario Gerardo Martir Crespin <br><br> -Samuel Francisco Pérez Guirola</p>
              </div>

              <div class="modal-footer">
                <a href="#!" style="color: white"
                class="modal-action modal-close waves-effect btn-flat" id="VolverModal">Volver</a>
              </div>
            </div>


  </body>
</html>
