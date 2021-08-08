<?php
	session_start();
	$conn = mysqli_connect("localhost", "root", "root", "SVE_BD");
    if(!$conn)
        echo "Hubo un error al conectarse";
    
    $usuariophp = $_SESSION['id'];
 	$SQL = "SELECT JSON_OBJECT('lista2',lista2,'lista1',lista1,'nulos',nulos,'blancos',blancos) from  (select * from (SELECT count(*) as lista2 from _estado_votacion GROUP by VOTO HAVING voto ='lista 2') U,(SELECT count(*) as lista1 from _estado_votacion GROUP by VOTO HAVING voto ='lista 1') D,(SELECT count(*) as nulos from _estado_votacion GROUP by VOTO HAVING voto ='Nulo') N,(SELECT count(*) as blancos from _estado_votacion GROUP by VOTO HAVING voto ='Blanco') B) R";
 	
	 //$SQL=$SQL."where correo='".$_REQUEST['usr']."' and //passwordd='".$_REQUEST['psw']."'";
 	

 	$ans = $conn->query($SQL);
 	if ($ans->num_rows > 0){    //verifico si hubo respuesta
 		$row= $ans->fetch_array();  
        echo $row[0];
         
 	}else
 		echo "Hubo un Error al tratar de resivir respuesta";
	
?>