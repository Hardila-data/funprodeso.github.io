<!DOCTYPE html>
<html>
<head>
	<title>Index de Imagen</title>
</head>
<body>

	        <?php
				   include("conexion.php");

				   $query = "SELECT * FROM tabla_imagen";
				   $resultado=$conexion->query($query);
				   $row = $resultado->fetch_assoc()
				   ?>
		    
	<form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="nombre" placeholder="Nombre..." value="">
		<td><iframe src="data:application/pdf;base64,<?php echo base64_encode($row['imagen']);?>"></iframe></td>
		<input type="file" name="Imagen">
		<input type="submit" name="Aceptar">
	</form>

</body>
</html>