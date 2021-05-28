<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="validate2.js"></script>
</head>
<body>
	<center>
		<?php
			$id=$_GET['ID'];
			include("conexion.php");

			$query="SELECT * FROM city WHERE ID='$id'";
			$resultado=$conexion->query($query);
			$row=$resultado->fetch_assoc();
		?>

		<form action="modificarcity_process.php?ID=<?php echo $row['ID']; ?>" method="POST" onsubmit="return validate2();">
			<br><br><br>
			<label>Name</label>
			<input type="text" id="name" name="name" placeholder="Name" value="<?php echo $row['Name'];?>"><br><br>
			<label>CountryCode</label>
			<input type="text" id="countrycode" readonly="" name="countrycode" placeholder="CountryCode" value="<?php echo $row['CountryCode'];?>"><br><br>
			<label>District</label>
			<input type="text" id="district" name="district" placeholder="District" value="<?php echo $row['District'];?>"><br><br>
			<label>Population</label>
			<input type="text" id="population" name="population" placeholder="Population" value="<?php echo $row['Population'];?>"><br><br>
			<input type="submit" name="Modificar">
		</form>
	</center>

</body>
</html>