<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Main Page
    </title>
    
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b41f4b4ea.js" crossorigin="anonymous"></script>
    <script rel="script" src="../scripts/jquery-3.6.0.min.js"></script>

    <script rel="script" src="../scripts/script.js"></script>

    <link rel="stylesheet" href="../styles/estilos_votar.css">
    <link rel="stylesheet" href="../styles/navstyle.css">
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

       
    
</head>
<body onload="registro_voto()">

<?php
          include "barra.php";      
      ?>


  <header>
  
      <input id="searchbox" placeholder="¿Necesitas ayuda?">
    
  </header>

    </div>
    <div class="fondo" id = "fond">
            
            <div class="elementos">

                <h1 id="votar_ya"> Elecciones Generales Primer periodo del 2021</h1>
                <div id= "list2" class="lista2" onclick = "foo()">
                    <h2>Lista 2</h2>
                    <img id ="votocasilla2" src="../media/casilla_voto.png">    
                    <img src="../media/candidatos_lista_1/Barbara.png">
                    <h5>Presidenta</h5>
                    <h5>Barabara Gutierez</h5>

                    <img src="../media/candidatos_lista_1/Emily.png">
                    <h5>Vicepresidenta</h5>
                    <h5>Barabara Gutierez</h5>
                </div>

                <div id="list1" class="lista1" onclick="foo2()">
                    <h2>Lista 1</h2>
                    <img id ="votocasilla1" src="../media/casilla_voto.png">    
                    <img src="../media/candidatos_lista_2/Julio.png">
                    <h5>Presidente</h5>
                    <h5>Julio Caiza</h5>

                    <img src="../media/candidatos_lista_2/Cristina.png">
                    <h5>Vicepresidenta</h5>
                    <h5>Cristina Morales</h5>
                </div>

                <button class="btnvotar" onclick="ShowAlert()">  Votar </button>
                
            </div>
        </div>

        <div id ="fond2">
            
            <h1 id= "voto"> </h1>
        </div>

</body>
</html>