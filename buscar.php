<?php

    ini_set('display_errors' , 'On');
    $conexion = mysqli_connect("localhost", "root", "", "new_project") or
    die("problemas con la conexion");
    $project = mysqli_query ($conexion, "select * from project, comentarios where project.id_card=comentarios.id_card") or die("Problemas con las slq" .mysqli_error($conexion));


if (isset($_POST['enviarcomentario'])){
    error_reporting(0);
    ini_set('display_errors' , 'On');
    $id_card = $_POST["id_card"];
    $comentario = $_POST["comentario"];
  $conexion = mysqli_connect ("localhost","root","","new_project")
  or die ("Problemas con la conexion");

  mysqli_query($conexion, "insert into comentarios(id_card,comentario) value('$id_card','$comentario')") or die ("Problemas con la Query". mysqli_error($conexion));


  ?>

<?php

        echo "<center><h4 style=\"color: white\">Se ha agregado el comentario"; echo "</h4></center>"; 
  }




  $palabra=$_POST['palabra'];
  $query="SELECT * FROM project WHERE tema LIKE '%$palabra%' ";
  $consulta3=$mysqli->query($query);

  if($consulta3->num_rows>=1) { 

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


<!-- Estructura basica de New_Project -->


                    

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
            href="#modalcomentario" onclick="Abrir();"><i class="material-icons">add_comment</i></a>
          <span class="card-title">
            <?php  echo "Titulo: ".$fila['tema'] ."<br>"; ?>
            </span>

            <script>
            function Abrir(){
              window.open("http://localhost/project/New_Project/com.php", "Hola", "width=800, height=400,           top=200, left=775");
              return false;
            }               
            </script>
        </div>
        <div class="card-content">
            <?php  echo "Descripcion: ".$fila['descripcion'] .""; ?>
        </div>
        <div class="card-action">

          <ul class="collapsible">
      <li>
      <div class="collapsible-header"><i class="material-icons">vpn_key</i><?php  echo "Id_Card: ".$fila['id_card'].""; ?></div>

    </li>


    <li>
      <div class="collapsible-header"><i class="material-icons">extension</i><?php  echo "Categoria: ".$fila['categoria'].""; ?></div>

    </li>

    <li>
      <div class="collapsible-header"><i class="material-icons">question_answer</i>Comentarios</div>
      <div class="collapsible-body">
        
                   <div>
      <div>
        <div>
        <div>
          <h1>Comentarios</h1>
          <?php error_reporting(0)  ?>
      <p><?php echo "Id_Card: ".$fila['id_card'] ."<br>"; ?></p>
  <p><?php echo "Comentario: ".$fila['comentario'] ."<br>"; ?></p>

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
          <input type="text" hidden="" name="id_card" value="<?php echo "".$fila['id_card'].""; ?>"> 
          <input type="text" hidden="" name="proyecto" value="<?php  echo "".$fila['tema'] .""; ?>">
          <input type="text" hidden="" name="project_id" autocomplete="off" 
          value="<?php echo $_SESSION['usuario']['id']; ?>">
          <input type="text" hidden="" name="usuario" autocomplete="off" 
          value="<?php echo $_SESSION['usuario']['nombre']; ?>">  
          <input type="text" name="comentario" autocomplete="off" class="grey lighten-3">
        <input type="submit" value="Enviar" class="btn btn-primary deep-purple lighten-1" name="enviarcomentario">
        </form>
      </div>
      </div>
    </li>

        </div>
      </div>
    </div>
  </div>
</ul></div></div></div></div>




    </div>
  </div>

</body>
</html>

    <?php

    }

?>

      <img src="img/fin.jpg">
      <br>

<?php

  }else{
    echo "<center><h4 style=\"color: white\">No hemos encotrado ningun proyecto con la palabra: " .$palabra;
  }