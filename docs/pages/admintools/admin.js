
function buscarAl() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200) {
            oJSON = JSON.parse(this.responseText);
            document.getElementById("nombre").value = oJSON.nombre;
            document.getElementById("apellido").value = oJSON.apellido;
            document.getElementById("correo").value = oJSON.correo;
            document.getElementById("password").value = oJSON.password;
            document.getElementById("voto").value = oJSON.voto;
        }
    
    
    }
    xhttp.open("GET", "get_stud.php?cd="+document.getElementById("cedula").value, true);
    xhttp.send();


    }
    
    
          //xhttp.open("POST", "get_stud.php", true);
          //xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          //xhttp.send("ced="+ document.getElementById("icedula").value);

          function leerf () {
            document.getElementById("buscar").style.display = "none";
            document.getElementById("anadir").style.display = "none";
            document.getElementById("leer").style.display = "block";
            document.getElementById("actualizar").style.display = "none";
            document.getElementById("Eliminar").style.display = "none";
            
          }

function findf () {
    document.getElementById("buscar").style.display = "block";
document.getElementById("anadir").style.display = "none";
document.getElementById("leer").style.display = "none";
document.getElementById("actualizar").style.display = "none";
document.getElementById("Eliminar").style.display = "none";


}
function anadirf () {
    document.getElementById("buscar").style.display = "none";
    document.getElementById("anadir").style.display = "block";
    document.getElementById("leer").style.display = "none";
    document.getElementById("actualizar").style.display = "none";
    document.getElementById("Eliminar").style.display = "none";

    
    }
    function actualf () {
        document.getElementById("buscar").style.display = "none";
        document.getElementById("anadir").style.display = "none";
        document.getElementById("leer").style.display = "none";
        document.getElementById("actualizar").style.display = "block";
        document.getElementById("Eliminar").style.display = "none";

        }

        function eliminarf () {
            document.getElementById("buscar").style.display = "none";
            document.getElementById("anadir").style.display = "none";
            document.getElementById("leer").style.display = "none";
            document.getElementById("actualizar").style.display = "none";
            document.getElementById("Eliminar").style.display = "block";

            }


function hidemain () {
    document.getElementById("buscar").style.display = "none";
            document.getElementById("anadir").style.display = "none";
            document.getElementById("leer").style.display = "none";
            document.getElementById("actualizar").style.display = "none";
            document.getElementById("Eliminar").style.display = "none";


}


function cargarf(){
    document.getElementById("buscar").style.display = "none";
            document.getElementById("anadir").style.display = "none";
            document.getElementById("leer").style.display = "none";
            document.getElementById("actualizar").style.display = "none";
            document.getElementById("Eliminar").style.display = "none";


}





