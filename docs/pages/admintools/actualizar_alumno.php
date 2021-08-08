<?php
	$con= mysqli_connect("localhost","root","root","SVE_BD");
	if(!$con)
		echo "ha ocurrido un error";

	
	$cedula = $_POST["cedula"];
	$nombre = strtolower($_POST["nombre"]);
	$apellido = strtolower($_POST["apellido"]);
	$genero = $_POST["genero"];
	$correo = $_POST["correo"];
	$password= $_POST["password"];
	$dd="/[0-9]{10}/";

	/*variables que guardan información a actualizar*/
	$infoest="UPDATE infoest L SET ";
	$login="UPDATE login L SET ";

	/* verificar nombre*/
	if (!empty($nombre))
		$infoest=$infoest."nombre='{$nombre}', ";
	else
		$infoest=$infoest."nombre=L.nombre, ";
	/* verificar apellido*/
	if (!empty($apellido))
		$infoest=$infoest."apellido='{$apellido}', ";
	else
		$infoest=$infoest."apellido=L.apellido, ";
	/*verificar genero*/
	if (!empty($genero))
		$infoest=$infoest."genero='{$genero}'";
	else
		$infoest=$infoest."genero=L.genero";
	/* verificar correo*/
	if (!empty($correo))
		$login=$login."correo='{$correo}', ";
	else
		$login=$login."correo=L.correo, ";
	/* verificar password*/
	if (!empty($password))
		$login=$login."password='{$password}' ";
	else
		$login=$login."password=L.password ";



	$login=$login." WHERE id_log = '{$cedula}'";
	$infoest =$infoest." WHERE cedula = '{$cedula}'";
	echo $login;
	echo $infoest;

	$cmd="UPDATE infoest SET nombre='{$nombre}',apellido='{$apellido}',genero = '{$genero}' WHERE cedula = '{$cedula}'";

	$cmd2 = "UPDATE login SET correo='{$correo}' WHERE id_log = '{$cedula}'";

	if(!mysqli_query($con,$infoest))
		echo "<h1> Ha ocurrido un error </h1>";
	else
	{
		if (!mysqli_query($con,$login))
			echo "Ha ocurrido un error";
		else
		{
			if ( !(preg_match($dd, $cedula)) )
		  		 	echo "<h3>Recuerde que la cédula  contiene 10 caracteres numéricos </h3>";
		  		 	
		  		 else
		  		 	echo "<h1 style=color:red> En caso de existir se ha actualizado correctamente los datos de {$nombre} </h1>";
		  		 	
                header("refresh:2; url=http://localhost:8888/docs/pages/admintools/panel_admin.php");


		}
	}
  ?>	


