function registrarse(){
	var formulario_registro= document.getElementById("Formulario_register");
	var formulario_login= document.getElementById("Formulario_login");
	formulario_login.style.display= "none";
	formulario_registro.style.display= "block";
	formulario_registro.style.left="400px";
	document.getElementById("procced").style.display= "none";
	
}

function login (){
	var formulario_registro= document.getElementById("Formulario_register");
	var formulario_login= document.getElementById("Formulario_login");
	formulario_login.style.display= "block	";
	formulario_registro.style.display= "none";
	document.getElementById("procced").style.display= "none";
	

}

function back() {
	document.getElementById("procced").style.display = "block";
	document.getElementById("Formulario_login").style.display= "none";
	document.getElementById("Formulario_register").style.display= "none";
	
	
}

function toggleNav() {
	if(document.getElementById("sidebar").style.left == "37px")
	{
		collapseNav();
	}
	else {
		expandNav();
	}
}

function collapseNav() {
	
	document.getElementById("sidebar").style.left = "-160px";
}

function expandNav() {
	document.getElementById("sidebar").style.left = "37px";
}

