<?php 
session_start(); 
include "docs/pages/conexion_a_bd.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM infoest inner join login on cedula=id_log WHERE correo='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			
           if ($row['correo'] === $uname && $row['password'] === $pass) {
			$_SESSION['correo'] = $row['correo'];
            $_SESSION['name'] = $row['nombre'];
			$_SESSION['apel'] = $row['apellido'];
            $_SESSION['id'] = $row['id_log'];
	
			if($row['clase']=='Estudiante'){
				header("Location: docs/pages/dashboard.php");
				exit(); 
			}
				else {
					header("Location: docs/pages/admintools/panel_admin.php");	
					exit();
				}
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}