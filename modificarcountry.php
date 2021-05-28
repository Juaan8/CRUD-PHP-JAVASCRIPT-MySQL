<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="validate1.js"></script>
</head>
<body>
	<center>

				<?php

					$code=$_REQUEST['Code'];
					include("conexion.php");

					$query="SELECT * FROM country WHERE Code='$code'";
					$resultado=$conexion->query($query);
					$row=$resultado->fetch_assoc();
				?>

		<form action="modificarcountry_process.php?Code=<?php echo $row['Code']; ?>" method="POST" onsubmit="return validate1();">



			<br><br><br>
			<label>Name</label>
			<input type="text" id="name" name="name" placeholder="Name" value="<?php echo $row['Name'];?>"><br><br>
			<label>Continent</label>
			<input type="text" id="continent" name="continent" placeholder="Continent" value="<?php echo $row['Continent'];?>"><br><br>
			<label>Region</label>
			<input type="text" id="region" name="region" placeholder="Region" value="<?php echo $row['Region'];?>"><br><br>
			<label>SurfaceArea</label>
			<input type="text" id="surfacearea" name="surfacearea" placeholder="SurfaceArea" value="<?php echo $row['SurfaceArea'];?>"><br><br>
			<label>IndepYear</label>
			<input type="text" id="indepyear" name="indepyear" placeholder="IndepYear" value="<?php echo $row['IndepYear'];?>"><br><br>
			<label>Population</label>
			<input type="text" id="population" name="population" placeholder="Population" value="<?php echo $row['Population'];?>"><br><br>
			<label>LifeExpectancy</label>
			<input type="text" id="lifeexpectancy" name="lifeexpectancy" placeholder="LifeExpectancy" value="<?php echo $row['LifeExpectancy'];?>"><br><br>
			<label>GNP</label>
			<input type="text" id="gnp" name="gnp" placeholder="GNP" value="<?php echo $row['GNP'];?>"><br><br>
			<label>GNPOld</label>
			<input type="text" id="gnpold" name="gnpold" placeholder="GNPOld" value="<?php echo $row['GNPOld'];?>"><br><br>
			<label>LocalName</label>
			<input type="text" id="localname" name="localname" placeholder="LocalName" value="<?php echo $row['LocalName'];?>"><br><br>
			<label>GovernmentForm</label>
			<input type="text" id="governmentform" name="governmentform" placeholder="GovernmentForm" value="<?php echo $row['GovernmentForm'];?>"><br><br>
			<label>HeadOfState</label>
			<input type="text" id="headofstate" name="headofstate" placeholder="HeadOfState" value="<?php echo $row['HeadOfState'];?>"><br><br>
			<label>Capital</label>
			<input type="text" id="capital" name="capital" placeholder="Capital" value="<?php echo $row['Capital'];?>"><br><br>
			<label>Code2</label>
			<input type="text" id="code2" name="code2" placeholder="Code2" value="<?php echo $row['Code2'];?>"><br><br>
			<input type="submit" name="Modificar">

		</form>
	</center>

</body>
</html>