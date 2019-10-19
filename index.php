<?php include 'funciones.php';
if(empty($_SESSION['usuario'])){
  get_header('New Project');
  include 'login.php';
}else{
  get_header('Bienvenido');
    include 'home.php';
}
get_footer();
?>
