<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    
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
          <nav class="navbar">
              <ul class="navbar-nav">
                <li class="logo"><a class="nav-link" href="#"><img id="ilogo" src="../media/yachay_verde.png"></a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard.php">     <i class="fas fa-home icons"></i>   <span class="link-text">Dashboard</span>    </a></li>
                <li class="nav-item"><a class="nav-link" href="candidatos.html">   <i class="fas fa-user-friends icons"></i> <span class="link-text">Candidatos</span>   </a></li>
                <li class="nav-item"><a class="nav-link" href="votarya.php">       <i class="fas fa-vote-yea icons"></i> <span class="link-text">Vota ya!</span>     </a></li>
                <li class="nav-item"><a class="nav-link" href="estadisticas.html"> <i class="fas fa-poll icons"></i>     <span class="link-text">Estadisticas</span> </a></li>
                <li class="nav-item"><a class="nav-link" href="certificado.php">  <i class="far fa-id-card icons"></i>  <span class="link-text">Certificado</span>  </a></li>

                <li class="nav-item"><a class="nav-link" href="usuario.html">  <i class="fas fa-user-circle"></i>  <span class="link-text">Mateo Lomas</span>  </a></li>
                
  
              </ul>
        </nav>

        <header>
        
            <input id="searchbox" placeholder="¿Necesitas ayuda?">
          
        </header>
        
        
    

    <div id="containerVoto">
        <div id="verificacion" >
            <!--Luego se cambia con los datos de la database-->
    <?php 
    include 'conexion_a_bd.php';
    $ans = $conn->query("SELECT * from infoestud inner join nacimiento_direccion where id_est_ced='1004295729'");
    $info = $ans->fetch_array();

    echo "<h1>Informacion del Estudiante</h1>
            <label>Cedula</label>
            <span>".$info["id_est_ced"]."</span>
            <label>Nombres</label>
            <span>".$info["nombres"]."</span>
            <span>Apellidos</span>
            <span>".$info["apellidos"]."</span>
            <span>Nacionalidad</span>
            <span>".$info["nacionalidad"]."</span>
            <span>Etnia</span>
            <span>".$info["etnia"]."</span>
            <span>Estado Civil</span>
            <span>".$info["estado_civil"]."</span>
            <span>Sexo</span>
            <span>".$info["sexo"]."</span>
            <span>Genero</span>
            <span>".$info["genero"]."</span>
            <h2>Lugar de Nacimiento</h2>

         
            <span>Pais de Nacimiento</span>
            <span>".$info["pais"]."</span>
            
            <span>Provincia</span>
            <span>".$info["provincia"]."</span>

            <span>Canton</span>
            <span>".$info["canton"]."</span>
            

            <span>Fecha de Nacimiento</span>
            <span>".$info["fnac"]."</span>

            <h2>Direccion Domiciliar</h2>

            <span>Calle1</span>
            <span>".$info["calle1"]."</span>
            <span>Calle2</span>
            <span>".$info["calle2"]."</span>
            
            <span>Referencia</span>
            <span>".$info["referencia"]."</span>"

        
            ?>

                 
            <button id="buttonVoto">Proceder con el Voto</button>    

        </div>
        

    </div>
    
</body>
</html>