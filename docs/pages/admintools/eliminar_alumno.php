<?php
	$con= mysqli_connect("localhost","root","root","SVE_BD");
	if(!$con)
		echo "ha ocurrido un error";

	
	$cedula = $_POST["cedula"];

	$cmd = "DELETE FROM login WHERE id_log= '{$cedula}'";
	$cmdi ="DELETE FROM infoest WHERE cedula ='{$cedula}'";
	$cmdl = "DELETE FROM `_estado_votacion` WHERE id_ced ='{$cedula}'";
	$dd="/[0-9]{10}/";
	if (!mysqli_query($con,$cmd))
		echo "ha ocurrido un error".$cmd;
	else
		{
		  if (!mysqli_query($con,$cmdi))
			echo "ha ocurrido un error".$cmdi;
		  else
		  	{
		  	if (!mysqli_query($con,$cmdl))
				echo "ha ocurrido un error".$cmdl;
		  	else
		  		{
		  		 	
		  		 if ( !(preg_match($dd, $cedula)) )
		  		 	echo "<h3>Recuerde que la cédula  contiene 10 caracteres numéricos </h3>";
		  		 	
		  		 else

		  		 	echo "<h1 style=color:red> Su solicitud ha sigo procesada correctamente</h1>";
		  		 	
				header("refresh:2; url=http://localhost:8888/docs/pages/admintools/panel_admin.php");
		  			
		  		}
		  	}	
		}
		
		
	
/*
delete from login where id_log= '1707013304';
delete from infoest where cedula ='1707013304';
DELETE FROM `_estado_votacion` WHERE id_ced ='1707013304';
*/
  ?>	