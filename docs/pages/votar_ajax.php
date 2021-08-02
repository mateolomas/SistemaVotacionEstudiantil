<?php
    session_start();
	include 'conexion_a_bd.php';
 	$SQL = "UPDATE _estado_votacion  SET voto='".$_REQUEST["voto"]."'";
	$SQL =$SQL." where id= ".$_SESSION['id'];
	if(!$conn->query($SQL)){
        echo "no se pudo actualizar";
    }
 	/*
	<?php
	include 'conexion.php';
 	$SQL = "UPDATE alumno SET " ;
 	$SQL = $SQL."nombre='".$_REQUEST["nm"]."', "; 
 	$SQL = $SQL."apellido='".$_REQUEST["ap"]."', ";
 	$SQL = $SQL."edad=".$_REQUEST["ed"]." ";
 	$SQL = $SQL."WHERE id=".$_REQUEST["cd"];
 	if($conn->query($SQL)){
		echo "registro actualizado";
	}else
		echo "no se pudo actualizar este registro";
	
	?>

 	*/
	
?>
