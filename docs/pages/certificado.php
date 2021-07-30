<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="../styles/navstyle.css">
    <link rel="stylesheet" href="../styles/styles_dash.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b41f4b4ea.js" crossorigin="anonymous"></script>
  
    <script rel="script" src="../scripts/script.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
</head>
<body>

      <nav class="navbar">
              <ul class="navbar-nav">
                <li class="logo"><a class="nav-link" href="#"><img id="ilogo" src="../media/yachay_verde.png"></a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard.php">     <i class="fas fa-home icons"></i>   <span class="link-text">Dashboard</span>    </a></li>
                <li class="nav-item"><a class="nav-link" href="candidatos.html">   <i class="fas fa-user-friends icons"></i> <span class="link-text">Candidatos</span>   </a></li>
                <li class="nav-item"><a class="nav-link" href="votarya.php">       <i class="fas fa-vote-yea icons"></i> <span class="link-text">Vota ya!</span>     </a></li>
                <li class="nav-item"><a class="nav-link" href="estadisticas.html"> <i class="fas fa-poll icons"></i>     <span class="link-text">Estadisticas</span> </a></li>
                <li class="nav-item"><a class="nav-link" href="certificado.html">  <i class="far fa-id-card icons"></i>  <span class="link-text">Certificado</span>  </a></li>

                <li class="nav-item"><a class="nav-link" href="usuario.html">  <i class="fas fa-user-circle"></i>  <span class="link-text">Mateo Lomas</span>  </a></li>
                
  
              </ul>
        </nav>

        <header>
        
            <input id="searchbox" placeholder="¿Necesitas ayuda?">
          
        </header>
        
        
    
    <main>
      
            <section>
            
                    
                <h5>Antes de procceder a sacar el certificado, necesitas verificar tu estado de votacion (Voto/Aun no vota)</h5>
                <form action="certificado.php" method="post" id="vercert">
                    <label for=verfced></label>
                    Numero de cedula: <input type="text" id="verfced" name="formced">
                    <input type="submit" value="Verificar Votacion" name="submit-btn">
                    
               </form>

                <?php
                    include "conexion_a_bd.php";
                    $ans = $conn->query("SELECT already_vote FROM estado_votacion where id_est='1004295729'");
                    $info = $ans->fetch_array();

                    if($_SERVER["REQUEST_METHOD"]== "POST"){
            

                      
                      if($info["already_vote"] == 1) {
                          echo "Ya voto!";
                          echo " <form action='certificate/downloadcertificado.php' method='post'>
                                  <input type='submit' value='Descargar Certificado'>
                                  </form>";
                        
                        }
                  else{
                    echo "Aun no vota, o hay un problema";
                  }
                      
                }
                    ?>
         
               

            </section>
    
  
    </main>
 
</body>
</html>