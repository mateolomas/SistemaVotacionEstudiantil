function registrarse(){
	var formulario_login= document.getElementById("Formulario_login");
	formulario_login.style.display= "none";
	
	document.getElementById("procced").style.display= "none";
	
}

function login (){
	var formulario_login= document.getElementById("Formulario_login");
	formulario_login.style.display= "block	";
	document.getElementById("procced").style.display= "none";
	
}

function back() {
	document.getElementById("procced").style.display = "block";
	document.getElementById("Formulario_login").style.display= "none";
	
}


function login_php(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
			if(this.readyState==4 && this.status==200){
				var oJASON = JSON.parse(this.responseText);
				if(oJASON.clase=='Estudiante'){
					window.location.replace("http://localhost:8888/prueba/SistemaVotacionEstudiantil-main/docs/pages/dashboard.php");}
		
		if(oJASON.clase=='Admin'){
					window.location.replace("http://localhost/prueba/SistemaVotacionEstudiantil-main/docs/pages/admintools/panel_admin.html");}
		
			}
		}
	
	var parse;
	parse="usr=" + document.getElementById("usuario").value +"&"; 
	parse=parse + "psw="+document.getElementById("passwd").value;
	xhttp.open("GET","login.php?"+parse,true);
	xhttp.send();
}

var click1=0;
var x1=0;
var click2=0;
var x2=0;
        function foo(){
            var ima = document.getElementById("votocasilla2");
            if (click1 == 0){
                ima.src= "../media/voto.jpg";
                document.getElementById("list2").style["background"]="#DBD7D7";
            
            }
            if (click1==1){
                ima.src= "../media/casilla_voto.png";
                document.getElementById("list2").style["background"]="#FFFFFF";
            }

            click1=1-x1;
            x1=click1;

        }
        function foo2(){
            var imag = document.getElementById("votocasilla1");
            if (click2 == 0){
                imag.src= "../media/voto.jpg";
                document.getElementById("list1").style["background"]="#DBD7D7";
            
            }
            if (click2==1){
                imag.src= "../media/casilla_voto.png";
                document.getElementById("list1").style["background"]="#FFFFFF";
            }

            click2=1-x2;
            x2=click2;

        }
        function foo3(){
            ShowAlert();
            //alert(click1 + " hola " + click2);
        }
    

        var voto_resultadoC = "";
        var voto_resultado="";
        function ShowAlert(){
            swal({
            title: "Votar",
            text: "Esta seguro de su voto",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Su voto ha sido registrado con exito!", {
                icon: "success",


            });
                document.getElementById("fond").style.display = "none";
                if(click1 == 1 && click2 ==1) {voto_resultado="Nulo"; voto_resultadoC="Su voto sea registrado como "+ voto_resultado};
                if(click1 == 0 && click2 ==0) {voto_resultado="Blanco"; voto_resultadoC="Su voto sea registrado como "+ voto_resultado};
                if(click1 == 1 && click2 ==0) {voto_resultado= "lista 2"; voto_resultadoC="Su voto sea registrado como "+voto_resultado};
                if(click1 == 0 && click2 ==1) {voto_resultado= "lista 1"; voto_resultadoC="Su voto sea registrado como "+ voto_resultado};
                document.getElementById("fond2").style.display = "block";
                document.getElementById("voto").textContent=voto_resultado;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                        if(this.readyState==4 && this.status==200){                           
                            document.getElementById("fond").style.display = "none";
                            document.getElementById("fond2").style.display = "block";
                            document.getElementById("voto").textContent= voto_resultadoC;
    	                }
                }
                xhttp.open("GET","votar_ajax.php?voto="+voto_resultado,true);
                xhttp.send();
           }else {
                swal("Vote nuevamente!");
             }  
                });
        }
function registro_voto(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState==4 && this.status==200){
			var oJASON = JSON.parse(this.responseText);
            if(oJASON.voto!="AUN NO VOTA"){
                document.getElementById("fond").style.display = "none";
                document.getElementById("fond2").style.display = "block";
                document.getElementById("voto").textContent= "Su Voto se ha registrado como "+oJASON.voto;
            }
    	}
    }
    xhttp.open("GET","registro_voto.php",true);
    xhttp.send();

}
 
function registro_votoo(){
	document.getElementById("votar_ya").textContent= document.getElementById("usuario_actual").textContent;
}

