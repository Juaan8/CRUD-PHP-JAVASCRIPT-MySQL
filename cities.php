<!DOCTYPE html>
<html>
<head>
	<title>Cities</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="mapamundi.png">
	<center>			
		<div id="div2">
			<table border="3">
				<thead>
					<th><a href="insertarcity.php">Nueva</a></th>
				</thead>
				<tbody>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>CountryCode</td>
						<td>District</td>
						<td>Population</td>
						<td>Modificar</td>
						<td>Eliminar</td>
					</tr>

					<?php
					$countrycode=$_REQUEST['Code'];
					include("conexion.php");

					$query="SELECT * FROM city WHERE CountryCode='$countrycode' ";
					$resultado=$conexion->query($query);
					while($row=$resultado->fetch_assoc()){
					?>

					<tr>
						<td><?php echo $row['ID'];?></td>
						<td><?php echo $row['Name'];?></td>
						<td><?php echo $row['CountryCode'];?></td>
						<td><?php echo $row['District'];?></td>
						<td><?php echo $row['Population'];?></td>
						<td><a href="modificarcity.php?ID=<?php echo $row['ID']; ?>">Modificar</a></td>
						<td><a href="eliminarcity.php?ID=<?php echo $row['ID']; ?>">Eliminar</a></td>

					</tr>

					<?php
					}
					?>	
				</tbody>
				
			</table>
			
		</div>
	</center>

</body>
</html>