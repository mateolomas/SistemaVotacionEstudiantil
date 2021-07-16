<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "conexion_a_bd.php"?> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b41f4b4ea.js" crossorigin="anonymous"></script>
    <script rel="script" src="../scripts/jquery-3.6.0.min.js"></script>

    <script rel="script" src="../scripts/script.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Validos', 'Blanco', 'Nulos'],
          ['Hombre', 250, 200, 10],
          ['Mujer', 400, 100, 5],
          ['Otro', 10, 1, 0]
          
        ]);

        var options = {
          chart: {
            title: 'Actualizado: 23:17 pm',
            
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</head>
<body id="main" onload="expandNav()">
    <header>
        <div id="whiteheader">
            <div><input id="search" placeholder="Necesitas ayuda?" style="font-weight: lighter; color: rgba(128, 128, 128, 0.712); width: 30%; border: none; border-radius: 15px; padding: 8px; background-color: rgba(128, 128, 128, 0.194)"></div>

        </div>
        
    </header>
    <span id="dash">Dashboard</span><br>
    
        <div id="sidebar">
            <ul>
              <li><div><img id="sidebar-header" src="../media/yachay_verde.png"></div></li>
              <li><a href="dashboard.html">Dashboard</a></li>
              <li><a href="candidatos.html">Candidatos</a></li>
              <li><a href="votarya.php">Votar Ya</a></li>
              <li><a href="estadisticas.html">Estadisticas</a></li>
              <li><a href="certificado.html">Certificado de Votacion</a></li>
              <li><div id="user">
                <span>Mateo Lomas</span>
                <span>Estudiante Regular</span>
                <img id="imguser" src="../media/userdefault.png">
            </div></li> 
            </ul>
        
            <div id="sidebar-btn" onclick='toggleNav()'>
              <span></span>
              <span></span>
              <span></span>
            </div>

            
        
          </div>
          
        <div id="iconsidebar">
            <ul>
                
                <li><span></span></li>
                <li><span></span></li>
                
                
                <br>
                
                <li><a href=""><i class="fas fa-home"></i></a></li>
                
                <li><a href=""><i class="fas fa-user-friends"></i></a></li>
                <li><a href=""><i class="fas fa-vote-yea"></i></a></li>
                <li><a href=""><i class="fas fa-poll"></i></a></li>
                <li><a href=""><i class="far fa-id-card"></i></a></li>
                 
              </ul>

        </div>
       
            
        
    
    
    <div class="container">
    
    
    
    <?php 
    $ans = $conn->query("SELECT COUNT(*) as nro_Estud from infoestud");
    $info = $ans->fetch_array();
    
    $votestats = $conn->query("SELECT COUNT(already_vote) AS already from estado_votacion e inner join infoestud i on e.id_est=i.id_est_ced where already_vote=1");
    $vote_already = $votestats->fetch_array();

    $voteLEFT = $conn->query("SELECT COUNT(already_vote) as noready from estado_votacion e inner join infoestud i on e.id_est=i.id_est_ced where already_vote=0");
    $vote_left = $voteLEFT->fetch_array();


    
    echo "<div id='candidates' class='quickstats'>
      <img style='width: 50px; border: 1; position: relative;' src='/docs/media/icons/153-bar-chart-growth-outline.gif'>
      <span>".$info['nro_Estud']."</span>
      <span>Inscritas en el patron electoral.</span>
    </div>
    
    <div id='votes' class='quickstats'>
    <img style='width: 50px;' src='/docs/media/icons/17-avatar-man-nodding-outline.gif'>
    <span>".$vote_already['already']."</span>
    
    <span>Han votado</span>
</div>

<div id='votesleft' class='quickstats'>
    <img style='width: 50px;' src='/docs/media/icons/69-eye-outline.gif'>
    <span>".$vote_left['noready']."</span>
    <span>Ausencia</span>
</div>
"
    ?>


 
        
    
    <div id="graph">
        <div id="barchart_material" style="width: 900px; height: 500px;"></div>
        
    </div> 
</body>
</html>