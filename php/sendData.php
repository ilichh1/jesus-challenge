<?php

require_once "conexion.php";
$conexion=conexion();

$fecha = $_POST["fecha"];
$tipo = $_POST["tip"];
$descripcion = $_POST["descripcion"];
$monto = $_POST["monto"];

  $sql="INSERT into registro (fecha,categoria,descripcion,monto)
        values('$fecha','$tipo','$descripcion','$monto')";

$result=mysqli_query($conexion,$sql);

echo json_encode(array("queryStatus"=>$result));

 ?>
