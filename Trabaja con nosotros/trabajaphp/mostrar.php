<!DOCTYPE html>
<html>
<head>
	<title>Mostrar imagen</title>
</head>
<body>
	<center>
		<table border="2">
			<thead>
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Imagen</th>
					<th>operaciones</th>
			    </tr>

			</thead>
			<tbody>
				<?php
				   include("conexion.php");

				   $query = "SELECT * FROM tabla_imagen";
				   $resultado=$conexion->query($query);
				   while ($row = $resultado->fetch_assoc()) {
				   ?>	
				   <tr>
				   	  <td><?php echo $row['id'];  ?></td>
				   	  <td><?php echo $row['nombre'];  ?></td>
				   	  <!--<td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/> </td>-->
				   	  <td><iframe src="data:application/pdf;base64,<?php echo base64_encode($row['imagen']);?>"></iframe></td>
				   	  <th> <a href="#">Modificar</a> </th>
				   	  <th> <a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a> </th>
				   </tr>
				<?php   
				   }

				?>
			</tbody>
		</table>
	</center>

</body>
</html>