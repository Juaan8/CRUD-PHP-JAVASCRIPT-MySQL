<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="validate3.js"></script>
</head>
<body>
	<center>
		<?php
			$language=$_REQUEST['Language'];
			include("conexion.php");

			$query="SELECT * FROM countrylanguage WHERE Language='$language'";
			$resultado=$conexion->query($query);
			$row=$resultado->fetch_assoc();
		?>

		<form action="modificarlanguage_process.php?Language=<?php echo $row['Language']; ?>" method="POST" onsubmit="return validate3();">
			<br><br><br>
			<label>Language</label>
			<input type="text" id="language" disabled="" name="language" placeholder="Language" value="<?php echo $row['Language'];?>"><br><br>
			<label>IsOfficial</label>
			<input type="text" id="isofficial" name="isofficial" placeholder="IsOfficial" value="<?php echo $row['IsOfficial'];?>"><br><br>
			<label>Percentage</label>
			<input type="text" id="percentage" name="percentage" placeholder="Percentage" value="<?php echo $row['Percentage'];?>"><br><br>
			<input type="submit" name="Modificar">
		</form>
	</center>

</body>
</html>