
<?php
function conexion(){
  $servidor="127.0.0.1";
  $usuario="jesus";
  $password="challenge";
  $bd="bitacora";
  $conexion = mysqli_connect($servidor,$usuario,$password,$bd);
  
  //echo "<pre>";
  //var_dump($conexion);
  //echo "</pre>";
  return $conexion;
}
 ?>
