<!DOCTYPE html>
<html>
<head>
	<title>Languages</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="mapamundi.png">
	<center>
		<div id="div3">
			<table border="3">
				<tbody>
					<tr>
						<td>CountryCode</td>
						<td>Language</td>
						<td>IsOfficial</td>
						<td>Percentage</td>
						<td>Modificar</td>
					</tr>

					<?php
					$countrycode=$_REQUEST['Code'];
					include("conexion.php");

					$query="SELECT * FROM countrylanguage WHERE CountryCode='$countrycode' ";
					$resultado=$conexion->query($query);
					while($row=$resultado->fetch_assoc()){
					?>

					<tr>
						<td><?php echo $row['CountryCode'];?></td>
						<td><?php echo $row['Language'];?></td>
						<td><?php echo $row['IsOfficial'];?></td>
						<td><?php echo $row['Percentage'];?></td>
						<td><a href="modificarlanguage.php?Language=<?php echo $row['Language']; ?>">Modificar</a></td>
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