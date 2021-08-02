<?php
	session_start();
	$conn = mysqli_connect("localhost", "root", "root", "SVE_BD");
    if(!$conn)
        echo "Hubo un error al conectarse";
    
    $usuariophp = $_SESSION['id'];
 	$SQL = "SELECT JSON_OBJECT('ID_CED',ID_CED,'voto',VOTO) from  _estado_votacion where ID_CED='${usuariophp}'";
 	
	 //$SQL=$SQL."where correo='".$_REQUEST['usr']."' and //passwordd='".$_REQUEST['psw']."'";
 	

 	$ans = $conn->query($SQL);
 	if ($ans->num_rows > 0){    //verifico si hubo respuesta
 		$row= $ans->fetch_array();  
 		echo $row[0];		
 	}else
 		echo "Hubo un Error al tratar de resivir respuesta";
	
?>