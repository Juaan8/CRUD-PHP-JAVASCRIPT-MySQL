<?php
	include("conexion.php");

	$code=$_REQUEST['Code'];

	$name=$_POST['name'];
	$continent=$_POST['continent'];
	$region=$_POST['region'];
	$surfacearea=$_POST['surfacearea'];
	$indepyear=$_POST['indepyear'];
	$population=$_POST['population'];
	$lifeexpectancy=$_POST['lifeexpectancy'];
	$gnp=$_POST['gnp'];
	$gnpold=$_POST['gnpold'];
	$localname=$_POST['localname'];
	$governmentform=$_POST['governmentform'];
	$headofstate=$_POST['headofstate'];
	$capital=$_POST['capital'];
	$code2=$_POST['code2'];

	$query="UPDATE country SET
	 Name='$name',
     Continent='$continent',
     Region='$region',
     SurfaceArea='$surfacearea',
     IndepYear='$indepyear', 
     Population='$population', 
     LifeExpectancy='$lifeexpectancy', 
     GNP='$gnp', 
     GNPOld='$gnpold', 
     LocalName='$localname', 
     GovernmentForm='$governmentform', 
     HeadOfState='$headofstate', 
     Capital='$capital', 
     Code2='$code2' 

     WHERE Code='$code'";

	$resultado=$conexion->query($query);

	if($resultado){
		header("Location: index.php");
	}

	else{
		echo "fallo la modificacion";
	}
?>