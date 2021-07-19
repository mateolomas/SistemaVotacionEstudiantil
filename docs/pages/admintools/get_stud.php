<?php 
    $conn = mysqli_connect("localhost", "root", "root", "SVE_BD");
    if(!$conn)
    echo "Hubo un error al conectarse a la bd";
    
    

    $SQL = "SELECT JSON_OBJECT('nombre', nombres, 'apellidos', apellidos, 'nacionalidad', nacionalidad, 'etnia', etnia, 'estcivil', estado_civil) from infoestud WHERE id_est_ced=".$_REQUEST["ced"];
    $ans = $conn->query($SQL);
    
    if($ans->num_rows > 0) {
        $row = $ans->fetch_array();
        echo $row[0];
    }
    else {
        echo "Not found";
    } 
        
        

    
?>


