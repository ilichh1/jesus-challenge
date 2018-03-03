<?php

require_once "conexion.php";
$conexion=conexion();
  $id=$_POST['idRegistro'];
  $f=$_POST['fecha'];
  $c=$_POST['categoria'];
  $co=$_POST['descripcion'];
  $cu=$_POST['monto'];
  $sql="UPDATE registro set fecha='$f';
                            categoria='$c',
                            descripcion='$co',
                            monto='$cu'
                      where id='$id'";
      echo $result=mysqli_query($conexion, $sql);

  ?>
