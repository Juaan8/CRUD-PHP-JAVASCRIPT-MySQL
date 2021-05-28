<?php
	include("conexion.php");

	$language=$_REQUEST['Language'];

	
	$isofficial=$_POST['isofficial'];
	$percentage=$_POST['percentage'];
	

	$query="UPDATE countrylanguage SET 
	
	isofficial='$isofficial',
	percentage='$percentage'

	WHERE Language='$language'";

	$resultado=$conexion->query($query);

	if($resultado){
		header("Location: index.php");
	}

	else{
		echo "fallo la modificacion";
	}
?>