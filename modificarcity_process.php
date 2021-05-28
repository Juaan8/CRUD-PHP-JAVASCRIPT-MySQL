	include("conexion.php");

	$id=$_REQUEST['ID'];

	$name=$_POST['name'];
	$countrycode=$_POST['countrycode'];
	$district=$_POST['district'];
	$population=$_POST['population'];

	$query="UPDATE city SET 
	Name='$name',
	CountryCode='$countrycode',
	District='$district',
	Population='$population'

	WHERE ID='$id'";

	$resultado=$conexion->query($query);

	if($resultado){
		header("Location: index.php");
	}

	else{
		echo "$query";
	}
?>