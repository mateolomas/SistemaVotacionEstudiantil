<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    
    
    <link rel="stylesheet" href="../styles/navstyle.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b41f4b4ea.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script rel="script" src="../scripts/script.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
      var nulos;
      var lista_1;
      var lista_2;
      var blancos;

    function obtener_datos(){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState==4 && this.status==200){
			      var oJASON = JSON.parse(this.responseText);
            nulos=oJASON.nulos;
            lista_1=oJASON.lista1;
            lista_2=oJASON.lista2;
            blancos=oJASON.blancos;
            }
    	}
    
    xhttp.open("GET","estadistica_voto.php",false);
    xhttp.send();

}

      function drawChart() {
        obtener_datos()

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Lista 1 ',     lista_1],
          ['Lista 2',      lista_2],
          ['Nulos', nulos],
          ['Blancos', blancos]
          
        ]);

        var options = {
          title: 'Resultados preliminares'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

</head>
<body >
        <?php
          include "barra.php";      
        ?>

        <header>
        
            <input id="searchbox" placeholder="¿Necesitas ayuda?">
          
        </header>
        
        <main> 
        <div id="piechart" style="width: 900px; height: 500px; position: relative; margin-left: 16em;"> </div>
        </main>
   
    
</body>
</html>