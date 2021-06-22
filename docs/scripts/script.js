function registrarse(){
	var formulario_registro= document.getElementById("Formulario_register");
	var formulario_login= document.getElementById("Formulario_login");
	formulario_login.style.display= "none";
	formulario_registro.style.display= "block";
	formulario_registro.style.left="400px";
}

function login (){
	var formulario_registro= document.getElementById("Formulario_register");
	var formulario_login= document.getElementById("Formulario_login");
	formulario_login.style.display= "block	";
	formulario_registro.style.display= "none";
	

}

var lista_img =["docs/media/escuela_ibio.png",
"docs/media/escuela_ifisica.png",
"docs/media/escuela_igeo.png",
"docs/media/escuela_imath.png",
"docs/media/escuela_iquim.png"];

var cont_login_Img =0;

function cambio_image_pie(){
	var imagen=document.all[39];
	if (cont_login_Img==5) cont_login_Img=0;
	imagen.src= lista_img[cont_login_Img];
	cont_login_Img++;
	setTimeout( cambio_image_pie, 1500);

}

cambio_image_pie();

      

function foo(){
			alert("hola");
		}

		function foo2(){
			alert("foo2");
		}