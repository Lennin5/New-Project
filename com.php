<!DOCTYPE html>
<html>
<head>
  <title>Buscador</title>
          <!-- Scripts Materialize-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>

          <!-- CSS  Materialize-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/redimid.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>
<body background="img/Pink.jpg">

     <form autocomplete="off" action="com.php" autocomplete="off" method="post">
       <input type="text" placeholder="Buscar..." name="palabra">
         <input type="submit" value="Explorar" class="btn deep-purple lighten-1" name="btn2">
            </form>
</body>
</html>

<?php
error_reporting(0);

  if (isset($_POST['palabra'])) {

    include 'conexion.php';

  }

  $palabra=$_POST['palabra'];
  $query="SELECT * FROM comentarios WHERE id_card LIKE '%$palabra%'";
  $consulta=$mysqli->query($query);

  if($consulta->num_rows>=1){ 

  echo "<h4 style=\"color: black\">Resultados del proyecto: " .$palabra; echo "</h4>";

    while($reg=$consulta->fetch_array(MYSQLI_ASSOC)){ ?>

    <div class="col s12 m7">
    <h2 class="header">Horizontal Card</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="https://lorempixel.com/100/190/nature/6">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p><?php  echo " ".$reg['comentario'] .""; ?></p>
        </div>
        <div class="card-action">
          <a href="#"><?php  echo " ".$reg['usuario'] .""; ?></a>
        </div>
      </div>
    </div>
  </div>
            
              <p>Nombre:  <br>

<br>            


<hr>
<hr>

<?php

}
  }else{
    echo "<h4 style=\"color: black\">No hemos encotrado ningun resultado con la palabra: " .$palabra;

  }

?>







