
function buscarAl() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200) {
            
            oJSON = JSON.parse(this.responseText);
            document.getElementById("inombre").value = oJSON.nombre;
        }
    
    
    }
    xhttp.open("GET", "get_stud.php?cd="+document.getElementById("icedula").value, true);
    xhttp.send();
    }
    
    
          //xhttp.open("POST", "get_stud.php", true);
          //xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          //xhttp.send("ced="+ document.getElementById("icedula").value);