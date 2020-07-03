<?php

  $conexion= new mysqli("localhost","root","","imagen");
  if ($conexion) {
  	echo "Conexion exitosa";
  }
  else{
  	echo "Conexion no exitosa";
  }

?>