<?php
    session_start();
    include 'conexion_a_bd.php';
    $voto= $_REQUEST["voto"];
    $usr=$_SESSION['id'];
 	$SQL = "UPDATE _estado_votacion  SET voto='{$voto}' where id_ced= '{$usr}'";
	if(!$conn->query($SQL)){
        echo "error";
        echo  $SQL;  
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
