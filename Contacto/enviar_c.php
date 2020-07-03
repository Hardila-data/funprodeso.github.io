<?php

    $conectar =@mysql_connect('localhost','root','');
    //verificar coneccion
    if (!$conectar) {
      # code...
      echo "No se pudo conectar con el servidor";
    }
    else
    {
      $base=mysql_selectdb('hojadevida1');
      if (!$base) {
        echo "no s encontro la base de datos";
      }
    }
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $apellido=$_POST['apellido'];

 
     sql="INSERT INTO datos VALUES('$nombre','$correo','$apellido')";

     $ejecutar = mysql_query($sql);
     //verificamos
     if(!$ejecutar){
      echo "Hubo un error";
     }
     else{
      echo "Dtos guardados correctamente";
     }

 

?>