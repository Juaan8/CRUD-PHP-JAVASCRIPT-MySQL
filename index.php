<!DOCTYPE html>
<html>
<head>
	<title>Country</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="mapamundi.png">
	<center>
		<div id="div1">
		<table border="3">
			

			<tbody>
				<tr>
					<td>Code</td>
					<td>Name</td>
					<td>Continent</td>
					<td>Region</td>
					<td>SurfaceArea</td>
					<td>IndepYear</td>
					<td>Population</td>
					<td>LifeExpectancy</td>
					<td>GNP</td>
					<td>GNPOld</td>
					<td>LocalName</td>
					<td>GovernmentForm</td>
					<td>HeadOfState</td>
					<td>Capital</td>
					<td>Code2</td>
					<td>Modificar</td>
					<td>Cities</td>
					<td>Languages</td>
				</tr>

				<?php
					include("conexion.php");

					$query="SELECT * FROM country";
					$resultado=$conexion->query($query);
					while($row=$resultado->fetch_assoc()){
				?>

				<tr>
					<td><?php echo $row['Code'];?></td>
					<td><?php echo $row['Name'];?></td>
					<td><?php echo $row['Continent'];?></td>
					<td><?php echo $row['Region'];?></td>
					<td><?php echo $row['SurfaceArea'];?></td>
					<td><?php echo $row['IndepYear'];?></td>
					<td><?php echo $row['Population'];?></td>
					<td><?php echo $row['LifeExpectancy'];?></td>
					<td><?php echo $row['GNP'];?></td>
					<td><?php echo $row['GNPOld'];?></td>
					<td><?php echo $row['LocalName'];?></td>
					<td><?php echo $row['GovernmentForm'];?></td>
					<td><?php echo $row['HeadOfState'];?></td>
					<td><?php echo $row['Capital'];?></td>
					<td><?php echo $row['Code2'];?></td>
					<td><a href="modificarcountry.php?Code=<?php echo $row['Code']; ?>">Modificar</a></td>
					<td><a href="cities.php?Code=<?php echo $row['Code']; ?>">Cities</a></td>
					<td><a href="languages.php?Code=<?php echo $row['Code']; ?>">Language</a></td>
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