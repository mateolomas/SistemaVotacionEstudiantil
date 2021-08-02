<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "conexion_a_bd.php"?> 
    <meta charset="UTF-8">
    
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles/navstyle.css">
    
    <style>

    body {
    background-color:#F0F2FA;
    }

  header {
      width: 100%;
      height: 60px;
      background-color: white;
      margin-left: 5rem;
  }

    #searchbox{
        border: none;
        border-radius: 15px;
        padding: 10px;
        width: 50%;
        margin: 10px 5px 5px 15px;
        background-color: white;
    }


#barchart_material {
   margin: 50px 0px 0px 280px;
  width: 700px;
  height: 400px;
    
  
    }

.container_stats {
    height: 100%;
    display: flex;
    flex-direction: row;
    
      
}

.quickstats {
  width: 100%;
  background-color: white;
  margin-right: 15px;
  
}

.quickstats span {
  font-size: 50px;
  margin: auto auto 50px 10px;
  width: 100%;
  
}

.quickstats p {
  font-size: 19px;
  margin-left: 70px;
  
}

.quickstats img {
  margin-left: 50px; 
  width: 130px;
  margin-right: 40px;
  margin-top: 0px;
}






    </style>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b41f4b4ea.js" crossorigin="anonymous"></script>
    

    <script rel="script" src="../scripts/script.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   <?php 
   //votos validos
    $ans1 = $conn->query("SELECT count(*) as valid_h from infoest inner join _estado_votacion on cedula=id_ced where genero='h' and (voto='lista 1' or voto='lista 2')");
    $validh = $ans1->fetch_array();

    $ans2 = $conn->query("SELECT count(*) as valid_m from infoest inner join _estado_votacion on cedula=id_ced where genero='m' and (voto='lista 1' or voto='lista 2')");
    $validm = $ans2->fetch_array();

    $ans3 = $conn->query("SELECT count(*) as valid_o from infoest inner join _estado_votacion on cedula=id_ced where genero='o' and (voto='lista 1' or voto='lista 2')");
    $valido = $ans3->fetch_array();

    //votos en blanco
    $ans4 = $conn->query("SELECT count(*) as blank_h from infoest inner join _estado_votacion on cedula=id_ced where voto = 'Blanco' AND genero='h'");
    $blankh = $ans4->fetch_array();

    $ans5 = $conn->query("SELECT count(*) as blank_m from infoest inner join _estado_votacion on cedula=id_ced where voto = 'Blanco' AND genero='m'");
    $blankm = $ans5->fetch_array();

    $ans6 = $conn->query("SELECT count(*) as blank_o from infoest inner join _estado_votacion on cedula=id_ced where voto = 'Blanco' AND genero='o'");
    $blanko = $ans6->fetch_array();

//votos nulos

    $ans7 = $conn->query("SELECT count(*) as nulos_h from infoest inner join _estado_votacion on cedula=id_ced where voto = 'Nulo' AND genero='h'");
    $nulosh = $ans7->fetch_array();

    $ans8 = $conn->query("SELECT count(*) as nulos_m from infoest inner join _estado_votacion on cedula=id_ced where voto = 'Nulo' AND genero='m'");
    $nulosm = $ans8->fetch_array();

    $ans9 = $conn->query("SELECT count(*) as nulos_o from infoest inner join _estado_votacion on cedula=id_ced where voto = 'Nulo' AND genero='o'");
    $nuloso = $ans9->fetch_array();


   
   ?>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year',  'Validos',                                'Blanco',                              'Nulos'],
          ['Mujer', <?php echo $validm['valid_m'];?>,        <?php echo $blankm['blank_m'];?>,      <?php echo $nulosm['nulos_m'];?>],
          ['Hombre', <?php echo $validh['valid_h'];?>,       <?php echo $blankh['blank_h'];?>,      <?php echo $nulosh['nulos_h'];?>],
          ['Otro',  <?php echo $valido['valid_o'];?>,        <?php echo $blanko['blank_o'];?>,      <?php echo $nuloso['nulos_o'];?>]
          
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
<body onload="drawChart();">

      <?php
          include "barra.php";
      ?>
      

        <header>
        
            <input id="searchbox" placeholder="¿Necesitas ayuda?">
          
        </header>
        
        
    
    <main>
      
    <?php
    
    
    $ans = $conn->query("select count(*) as nro_estud from login where clase='Estudiante'");
    $info = $ans->fetch_array();
    
    
    $votestats = $conn->query("select COUNT(voto) AS already from _estado_votacion where VOTO!='AUN NO VOTA'");
    $vote_already = $votestats->fetch_array();

    $voteLEFT = $conn->query("select COUNT(voto) AS noready from _estado_votacion where VOTO='AUN NO VOTA'");
    $vote_left = $voteLEFT->fetch_array();

    
       
    echo "
   
   
      <div class='container_stats'>
    
      <div class='quickstats'>
    <img src='/docs/media/icons/153-bar-chart-growth-outline.gif'>
      <span>".$info['nro_estud']."</span>
      <p> Inscritas en el patron electoral.</p>
        </div>
     
    <div class='quickstats'>
   <img src='/docs/media/icons/17-avatar-man-nodding-outline.gif' >
    <span >".$vote_already['already']."</span>
    <p> Han votado</p>
</div>

<div class='quickstats'>
    <img src='/docs/media/icons/69-eye-outline.gif' >
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