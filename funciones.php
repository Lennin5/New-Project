<?php session_start();

$conexion=mysqli_connect('localhost','root','','new_project')or die('Error al seleccionar la base de datos');

function escapar($entrada){
    global $conexion;
    return mysqli_real_escape_string($conexion,$entrada);
}

function registrar(){
    global $conexion;
    //usuario
    //acceso
    $usuario=escapar($_POST['usuario']);
      $acceso=password_hash($_POST['acceso'],PASSWORD_DEFAULT);


        if($conexion->query('insert into usuarios(username,acceso) values
        ("'.$usuario.'","'.$acceso.'")')){
          $_SESSION['alert']=array('success','Te has registrado con exito');
        }else{
          $_SESSION['alert']=array('danger','Ha ocurrido un error al guardar');
        }
}


function iniciar_sesion(){
    global $conexion;
    //usuario
    //acceso
    $usuario=escapar($_POST['usuario']);
    $acceso=$_POST['acceso'];
    $query=$conexion->query('select * from usuarios where username="'.$usuario.'"');
    if($query->num_rows>0){
      $datos=$query->fetch_assoc();
      if(password_verify($acceso,$datos['acceso'])){
          // $acceso=lo que el usuario escribio
          // $datos= lo que esta guardado en nuestra BD
      //Si la contraseña es correcta:
        $_SESSION['usuario']=array('id'=>$datos['id'],'nombre'=>$datos['username']);
    }else{
      // Si la conta
      $_SESSION['alert']=array('warning','La contraseña es incorrecta');
      }
    }else{
      $_SESSION['alert']=array('warning','El nombre del usuario es incorrecto');
    }
}

function get_header($title){
    echo '
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/redimid.css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.11/semantic.js"></script>
        <title>'.$title.'</title>
    </head>
    <body>';
    if(isset($_SESSION['alert'])){
        echo '
        <div class="alert alert-'.$_SESSION['alert'][0].' animated fadeInLeft alert-dismissible fade show alerta" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            '.$_SESSION['alert'][1].'
        </div>';
        unset($_SESSION['alert']);
    }
}
function get_footer(){
    echo '
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/inito.js" type="text/javascript"></script>
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
      direction: "left",
      hoverEnabled: false
    });
  });


  $(document).ready(function(){
$(".collapsible").collapsible();
});


         // Slider //
         $(document).ready(function(){
               $(".slider").slider({
                 indicators: false, // indicadores de imagenes (puntos que aparecen abajo) //
                 height: 400, // alto de las imagenes //
                 transition: 600, // tiempo de pasar la transicion (100=1 seg) //
                 interval: 6000, // tiempo de intervalos en los que cambiaran las imagenes (1000=1 seg) //
               });
             });


             document.addEventListener("DOMContentLoaded", function() {
                 var elems = document.querySelectorAll(".carousel");
                 var instances = M.Carousel.init(elems, options);
               });

               // Or with jQuery

               $(document).ready(function(){
                 $(".carousel").carousel();
               });

      document.addEventListener("DOMContentLoaded", function() {
    var elems = document.querySelectorAll(".dropdown-trigger");
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

  $(".dropdown-trigger").dropdown();
        
         </script>
    </body>
</html>';
}
