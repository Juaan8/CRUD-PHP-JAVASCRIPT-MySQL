function validate2(){
	var
	name,
	countrycode,
	district,
	population;

	name=document.getElementById('name').value;
	countrycode=document.getElementById('countrycode').value;
	district=document.getElementById('district').value;
	population=document.getElementById('population').value;

	if(name===""||countrycode===""||district===""||population===""){
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if(name.length>35){
		alert("El Name es muy largo solo puede tener 35 caracteres");
		return false;
	}
	else if(countrycode.length>3){
		alert("El CountryCode es muy largo puede tener 3 caracteres");
		return false;
	}
	else if(district.length>20){
		alert("El Name es muy largo puede tener 20 caracteres");
		return false;
	}
	else if(isNaN(population)){
		alert("La population debe ser un numero");
		return false;
	}

}