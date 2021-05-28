<?php
	include("conexion.php");

	$name=$_POST['name'];
	$countrycode=$_POST['countrycode'];
	$district=$_POST['district'];
	$population=$_POST['population'];

	$query="INSERT INTO city (Name,CountryCode,District,Population) VALUES ('$name','$countrycode','$district','$population')";
	$result= $conexion->query($query);

	if ($result) {
		header("Location: index.php");
	}
	else{
		echo "falla en la insersion";
	}
?>