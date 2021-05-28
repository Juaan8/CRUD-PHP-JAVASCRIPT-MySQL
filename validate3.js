function validate3(){
	var
	isofficial,
	percentage;

	isofficial=document.getElementById('isofficial').value;
	percentage=document.getElementById('percentage').value;

	if(isofficial===""||percentage===""){
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if (isofficial !== "T" && isofficial !== "F") {
     alert("El campo isofficial debe ser T o F");
     return false;
   }
   else if (isNaN(percentage)) {
     alert("El campo percentage debe ser un numero puede tener decimales");
     return false;
 }
   


}