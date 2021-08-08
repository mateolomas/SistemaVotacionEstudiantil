<?php 

    $conn = mysqli_connect("localhost", "root", "root", "SVE_BD");
if(!conn) {
    echo "cant connect";
}

$cedula = $_REQUEST["cd"];
    $SQL = "SELECT JSON_OBJECT('nombre',nombre,'apellido',apellido,'voto',voto,'password',password,'correo',correo) from (select correo,password,voto,nombre,apellido from login,_estado_votacion,infoest where id_ced =id_log and cedula=id_ced and cedula='{$cedula}') T";
    

    $ans = $conn->query($SQL);
    if($ans->num_rows > 0) {
        $row = $ans->fetch_array();
        echo $row[0];   
    }
    else {
        echo "Not found :(";
    }


?>

