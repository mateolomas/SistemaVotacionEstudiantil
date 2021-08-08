<?php
	$con= mysqli_connect("localhost","root","root","SVE_BD");
	if(!$con)
		echo "ha ocurrido un error";

	$cedula = $_POST["cedula"];
	$nombre = strtolower($_POST["nombre"]);
	$apellido = strtolower($_POST["apellido"]);
	$genero = $_POST["genero"];
	$correo = $nombre."@yachaytech.edu.ec";

	$cmd = "INSERT INTO login values('{$cedula}','{$correo}','{$apellido}','Estudiante');";
	$cmdi ="INSERT INTO infoest values('{$cedula}','{$nombre}','{$apellido}','{$genero}')";
	$cmdl = "INSERT INTO _estado_votacion values('{$cedula}','AUN NO VOTA')";
	if (!mysqli_query($con,$cmd))
		{
		echo "<h1>ha ocurrido un error: ".$cmd."</h1>";
		echo "<h3> Asegurece de insertar correctamente los datos </h3>" ;
		header("refresh:2; url=http://localhost:8888/docs/pages/admintools/panel_admin.php");

		}
	else
		{
		  if (!mysqli_query($con,$cmdi))
		  	{
			echo "<h1>ha ocurrido un error: ".$cmdi."</h1>";
			header("refresh:2; url=http://localhost:8888/docs/pages/admintools/panel_admin.php");

		  	}
		  else
		  	{
		  	if (!mysqli_query($con,$cmdl))
				echo "ha ocurrido un error".$cmdl;
		  	else
		  		{
				echo "<h1 style=color:red> Se ha insertado ha ".$nombre." correctamente en las 3 tablas </h1>";
				header("refresh:2; url=http://localhost:8888/docs/pages/admintools/panel_admin.php");	
		  		}
		  	}	
		}
		
	
/*
delete from login where id_log= '1707013304';
delete from infoest where cedula ='1707013304';
DELETE FROM `_estado_votacion` WHERE id_ced ='1707013304';

alter table _estado_votacion add CONSTRAINT voto_c check( VOTO RLIKE ('lista 1|lista 2|Blanco|Nulo|AUN NO VOTA'));
alter table _estado_votacion add CONSTRAINT id_c check( id_ced RLIKE ('[0-9]{10}'));
ALTER TABLE `_estado_votacion`
  ADD PRIMARY KEY (`id_ced`);



alter table login add CONSTRAINT correo_c check( correo RLIKE '[a-z]+');
alter table login add CONSTRAINT clase_c check( clase RLIKE '[a-z]+');
alter table login add CONSTRAINT password_c check( password RLIKE '[a-z]+');
alter table login add CONSTRAINT id_login check( id_login RLIKE '[0-9]{10}');
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_log`);


alter table infoest add CONSTRAINT genero_c check( genero RLIKE ('h|m|o')); 
alter table infoest add CONSTRAINT apellido_c check( apellido RLIKE '[a-z]+');
alter table infoest add CONSTRAINT apellido_c check( nombre RLIKE '[a-z]+ |[A-Z][a-z]+');
alter table infoest add CONSTRAINT cedula_c check( cedula RLIKE '[0-9]{10}');
ALTER TABLE `infoest` ADD PRIMARY KEY (`cedula`);

*/

  ?>	



