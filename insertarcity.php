<!DOCTYPE html>
<html>
<head>
	<title>Insertar city</title>
	<script src="validate2.js"></script>
</head>
<body>
	<center>
		<form action="insertarcity_process.php" method="POST" onsubmit="return validate2();">
			<label>Name</label>
			<br>
			<input type="text" id="name" name="name" placeholder="Name" value="">
			<br>
			<br>
			<label>CountryCode</label>
			<br>
			<input type="text" id="countrycode" name="countrycode" placeholder="CountryCode" value="">
			<br>
			<br>
			<label>District</label>
			<br>
			<input type="text" id="district" name="district" placeholder="District" value="">
			<br>
			<br>
			<label>Population</label>
			<br>
			<input type="text" id="population" name="population" placeholder="Population" value="">
			<br>
			<br>
			<input type="submit" name="Aceptar">
		</form>
	</center>

</body>
</html>