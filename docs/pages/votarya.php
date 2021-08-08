<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votar ya</title>
    
    <link rel="stylesheet" href="../styles/styles_votarya.css">
    <link rel="stylesheet" href="../styles/navstyle.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b41f4b4ea.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script rel="script" src="../scripts/jquery-3.6.0.min.js"></script>
    <script rel="script" src="../scripts/script.js"></script>
    <script>
        function ShowAlert(){
            swal("Procediendo a votar", "Tu voto es secreto y confidencial, no des tus contraseñas a nadie, ni reveles tu voto. Porfavor, verifica tus datos en el siguiente menu, si hay algo incorrecto no dudes en contactar lo mas rapido posible a Registros Academicos");
        }
    </script>
</head>
<body onload="ShowAlert()">
         
<?php
          include 'barra.php';      
      ?>

        <header>
        
            <input id="searchbox" placeholder="¿Necesitas ayuda?">
          
        </header>
        
        
    

    <div id="containerVoto">
        <div id="verificacion" >
            <!--Luego se cambia con los datos de la database-->


    <?php 
    include 'conexion_a_bd.php';
    $ans = $conn->query("SELECT * from infoest where cedula=".$_SESSION['id']);
    $info = $ans->fetch_array();

    echo "<h1>Informacion del Estudiante</h1>
            <label class='infovot'>Cedula</label>
            <span>".$info["cedula"]."</span>
            <label class='infovot'>Nombres</label>
            <span>".$info["nombre"]."</span>
            <span class='infovot'>Apellidos</span>
            <span>".$info["apellido"]."</span>" 
            
        
            ?>

                 
            <button id="buttonVoto" onclick="window.location.replace('votar.php')">Proceder con el Voto</button>    


        </div>
        

    </div>
    
</body>
</html>