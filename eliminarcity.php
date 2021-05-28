<?php
	include("conexion.php");

	$id=$_REQUEST['ID'];



	$query="DELETE FROM city WHERE ID='$id'";

	$resultado=$conexion->query($query);

	if($resultado){
		header("Location: index.php");
	}

	else{
		echo "fallo la eliminacion";
	}
?>