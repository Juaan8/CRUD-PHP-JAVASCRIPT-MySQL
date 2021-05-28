function validate1(){
	var
	name,
	continent,
	region,
	surfacearea,
	indepyear,
	population,
	lifeexpectancy,
	gnp,
	gnpold,
	localname,
	governmentform,
	headofstate,
	capital,
	code2;

	name=document.getElementById('name').value;
	continent=document.getElementById('continent').value;
	region=document.getElementById('region').value;
	surfacearea=document.getElementById('surfacearea').value;
	indepyear=document.getElementById('indepyear').value;
	population=document.getElementById('population').value;
	lifeexpectancy=document.getElementById('lifeexpectancy').value;
	gnp=document.getElementById('gnp').value;
	gnpold=document.getElementById('gnpold').value;
	localname=document.getElementById('localname').value;
	governmentform=document.getElementById('governmentform').value;
	headofstate=document.getElementById('headofstate').value;
	capital=document.getElementById('capital').value;
	code2=document.getElementById('code2').value;

	if(indepyear===""||lifeexpectancy===""||gnp===""||gnpold===""||headofstate===""||capital===""){
		alert("Los campo IndepYear, LifeExpectancy, GNP, GNPOld, HeadOfState, y Capital son obligatorios");
		return false;
	}
	else if(name.length>52){
		alert("El Name es muy largo");
		return false;
	}
	else if(continent!=="Asia"&&continent!=="Europe"&&continent!=="North America"&&continent!=="Africa"&&continent!=="Oceania"
		&&continent!=="Antarctica"&&continent!=="South America"){
		alert("El campo continent debe ser Asia, Europe, North America, Africa, Oceania, Antarctica o South America");
		return false;
	}
	else if(region.length>26){
	alert("La Region es muy larga");
	return false;
	}
	else if(isNaN(surfacearea)){
		alert("La SurfaceArea debe ser un numero que puede tener decimales");
		return false;
	}
	else if(indepyear.length>6){
		alert("El IndepYear debe tener 6 caracteres");
		return false;
	}
	else if(isNaN(indepyear)){
		alert("El IndepYear debe ser un numero que puede contener 6 caracteres");
		return false;
	}
	
	else if(isNaN(population)){
		alert("La Population debe ser un numero");
		return false;
	}
	else if(isNaN(lifeexpectancy)){
		alert("La LifeExpectancy debe ser un numero");
		return false;
	}
	else if(isNaN(gnp)){
		alert("El campo GNP debe ser un numero que puede tener decimales");
		return false;
	}
	else if(isNaN(gnpold)){
		alert("El campo GNPOld debe ser un numero que puede tener decimales");
		return false;
	}
	else if(localname.length>45){
		alert("El LocalName debe tener 45 caracteres");
		return false;
	}
	else if(governmentform.length>45){
		alert("El GovernmentForm debe tener 45 caracteres");
		return false;
	}
	else if(headofstate.length>60){
		alert("El HeadOfState debe tener 60 caracteres");
		return false;
	}
	else if(isNaN(capital)){
		alert("La Capital debe ser un numero");
		return false;
	}
	else if(code2.length>2){
		alert("El Code2 puede tener 2 caracteres");
		return false;
	}



}