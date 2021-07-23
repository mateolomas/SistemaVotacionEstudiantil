<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "conexion_a_bd.php"?> 
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
      
    <?php
    
    
    $ans = $conn->query("SELECT COUNT(*) as nro_Estud from infoestud");
    $info = $ans->fetch_array();
    
    $votestats = $conn->query("SELECT COUNT(already_vote) AS already from estado_votacion e inner join infoestud i on e.id_est=i.id_est_ced where already_vote=1");
    $vote_already = $votestats->fetch_array();

    $voteLEFT = $conn->query("SELECT COUNT(already_vote) as noready from estado_votacion e inner join infoestud i on e.id_est=i.id_est_ced where already_vote=0");
    $vote_left = $voteLEFT->fetch_array();


    
    echo "
      <div class='container_stats'>
    
      <div class='quickstats'>
    <img src='/docs/media/icons/153-bar-chart-growth-outline.gif'>
      <span>".$info['nro_Estud']."</span>
      <p> Inscritas en el patron electoral.</p>
        </div>
     
    <div class='quickstats'>
   <img src='/docs/media/icons/17-avatar-man-nodding-outline.gif'>
    <span>".$vote_already['already']."</span>
    <p> Han votado</p>
</div>

<div class='quickstats'>
    <img src='/docs/media/icons/69-eye-outline.gif'>
    <span>".$vote_left['noready']."</span>
    <p> Ausencia</p>
</div> 

</div>
"
    ?>

    <div id="graph">
        <div id="barchart_material"></div>
        
    </div> 
  
</main>
 
</body>
</html>