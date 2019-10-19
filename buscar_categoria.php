<?php
  $palabra=$_POST['palabra'];
  $query="SELECT * FROM project WHERE categoria LIKE '%$palabra%'";
  $consulta3=$mysqli->query($query);
  if($consulta3->num_rows>=1){ 

  echo "<center><h4 style=\"color: white\">Resultados para: " .$palabra; echo "</h4></center>";

    while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){ ?>

<!DOCTYPE html>
<html>
<head>
  <title>New_Project</title>



        <!-- CSS  Materialize-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/redimid.css" type="text/css" rel="stylesheet" media="screen,projection"/>


        <!-- Scripts Materialize-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
    
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.parallax').parallax();
  });
        

  </script>
</head>
<body>


      <div class="row" id="Card2">
    <div class="col s12 m6">
      <div class="card">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">account_circle</i><?php  echo "Creador de proyecto: ".$fila['nombre'] ."<br>"; ?></div>
              </li>
                </ul>

        <div class="card-image">
               <img class="materialboxed" src="data:image/jpg;base64,<?php echo base64_encode($fila['Imagen']); ?>"/>
          <a class="btn-floating btn-large pulse halfway-fab waves-effect waves-light deep-purple lighten-1 modal-trigger"
            href="#modalcomentarios"><i class="material-icons">add_comment</i></a>
          <span class="card-title">
            <?php  echo "Titulo: ".$fila['tema'] ."<br>"; ?>

            </span>
        </div>
        <div class="card-content" align="left">
            <?php  echo "Descripcion: ".$fila['descripcion'] .""; ?>
        </div>
        <div class="card-action">

          <ul class="collapsible">

    <li>
      <div class="collapsible-header"><i class="material-icons"></i><?php  echo "Categoria: ".$fila['categoria'].""; ?></div>

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


</body>
</html>

    <?php

    }

?>

      <img src="img/fin.jpg">
      <br>

<?php

  }else{
    echo "<center><h4 style=\"color: white\">No hemos encotrado ninguna categoria con la palabra: " .$palabra;
  }