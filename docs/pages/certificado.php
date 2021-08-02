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

<?php
          include "barra.php";      
      ?>


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
                    session_start();
                    $ans = $conn->query("SELECT * FROM _estado_votacion where id_ced=".$_SESSION['id']);
                    $info = $ans->fetch_array();

                    if($_SERVER["REQUEST_METHOD"]== "POST"){
            

                      if($_SESSION['id'] == $_POST["formced"]){
                        if($info["voto"] != "AUN NO VOTA") {
                            echo "Ya voto!";
                            echo " <form action='certificate/downloadcertificado.php' method='post'>
                                    <input type='submit' value='Descargar Certificado'>
                                    </form>";
                          
                            }
                            else{
                                echo "Aun no vota, o hay un problema";
                                }
                      }

                      else {
                          echo "Esa no es tu cedula";
                      }
                      
                      
                }
                    ?>
         
               

            </section>
    
  
    </main>
 
</body>
</html>