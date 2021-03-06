<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="../styles/navstyle.css">
    <link rel="stylesheet" href="../styles/styles_candidatos.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b41f4b4ea.js" crossorigin="anonymous"></script>
    <script rel="script" src="../scripts/jquery-3.6.0.min.js"></script>

    <script rel="script" src="../scripts/script.js"></script>
    <script rel="script" src="../scripts/script_candidatos.js"></script>

</head>
<body>

 
<?php
          include "barra.php";      
      ?>

<header>

  <input id="searchbox" placeholder="¿Necesitas ayuda?">

</header>
	
       
<main>
    
    	<div class="candidatos">

          <div class="header_imagenes">
              <img src="../media/escuela_ibio.png" id="imagen_header">
          </div>

          <div class="Imagen_fondo">
            <img src="../media/Imagen_fondo_candidatos.jpg" id="Imagen_fondoI">
          </div>

          <div class="descripcion_y_botones">
            <h3> Candidatos</h3>

            <p> Todos los Estudiantes gozan del derecho a Elegir y ser eleguidos, del mismo modo tienen laresponsabilidad de participar en el proceso Electivo. 
            Este semestre los alumnos podrán votat por sus nuevos representantes Estudiantiles, conformados por 2 diferentes partidos Lista 1 y lista2.</p>

             <button id="btn_lista1" onmouseover="onraton()"> Lista 1 </button>
             <button id="btn_lista2" onmouseover="offraton()"> Lista 2</button>
            
          </div>
      
      <div class="lista1">

        <div class="candidatosdes">
          <figure>
            <img src="../media/candidatos_lista_1/Barbara.png">
            <figcaption>  Barbara Gutierez </figcaption>
          </figure>

          <h5> Presidenta</h5>
          <p>Postulante para Presidenta de la asociación Estudiantes del primer periodo del 2021
          Estudiante de la carrera de Química de septimo semestre.
          Ha participado en Describir es explicar, de forma detallada y ordenada, cómo son lasbpersonas, los lugares o los objetos. La descripción sirve sobre todo para ambientar la acción y crear una atmósfera que haga más creíbles los hechos que se narran.</p>
        </div>
      
      <div class="candidatosdes">
            <figure>
              <img src="../media/candidatos_lista_1/Emily.png">
              <figcaption>  Emily Gomez </figcaption>
            </figure>

            <h5> Vice Presidenta</h5>
            <p>Postulante para Presidenta de la asociación Estudiantes del primer periodo del 2021
            Estudiante de la carrera de Química de septimo semestre.
            Ha participado en Describir es explicar, de forma detallada y ordenada, cómo son lasbpersonas, los lugares o los objetos. La descripción sirve sobre todo para ambientar la acción y crear una atmósfera que haga más creíbles los  hechos que se narran.</p>
      </div>

      <div class="candidatosdes">
            <figure>
              <img src="../media/candidatos_lista_1/Marco.png">
              <figcaption>  Marco Lopéz</figcaption>
            </figure>

            <h5> Tesorero</h5>
            <p>Postulante para Presidenta de la asociación Estudiantes del primer periodo del 2021
            Estudiante de la carrera de Química de septimo semestre.
            Ha participado en Describir es explicar, de forma detallada y ordenada, cómo son lasbpersonas, los lugares o los objetos. La descripción sirve sobre todo para ambientar la acción y crear una atmósfera que haga más creíbles los  hechos que se narran.</p>
      </div>



      <div class="candidatosdes">
            <figure>
              <img src="../media/candidatos_lista_1/Julia.png">
              <figcaption>  Julia León</figcaption>
            </figure>

            <h5> Secretaria</h5>
            <p>Postulante para Presidenta de la asociación Estudiantes del primer periodo del 2021
            Estudiante de la carrera de Química de septimo semestre.
            Ha participado en Describir es explicar, de forma detallada y ordenada, cómo son lasbpersonas, los lugares o los objetos.La descripción sirve sobre todo para ambientar la acción y crear una atmósfera que haga más creíbles los  hechos que se narran.</p>
      </div>  
                  
      </div>

      <div class="lista2">

        <div class="candidatosdes">
          <figure>
            <img src="../media/candidatos_lista_2/Julio.png">
            <figcaption>  Julio Caiza </figcaption>
          </figure>

          <h5> Presidenta</h5>
          <p>Postulante para Presidenta de la asociación Estudiantes del primer periodo del 2021
          Estudiante de la carrera de Química de septimo semestre.
          Ha participado en Describir es explicar, de forma detallada y ordenada, cómo son lasbpersonas, los lugares o los objetos. La descripción sirve sobre todo para ambientar la acción y crear una atmósfera que haga más creíbles los hechos que se narran.</p>
        </div>
      
      <div class="candidatosdes">
            <figure>
              <img src="../media/candidatos_lista_2/Cristina.png">
              <figcaption>  Cristina Morales </figcaption>
            </figure>

            <h5> Vice Presidenta</h5>
            <p>Postulante para Presidenta de la asociación Estudiantes del primer periodo del 2021
            Estudiante de la carrera de Química de septimo semestre.
            Ha participado en Describir es explicar, de forma detallada y ordenada, cómo son lasbpersonas, los lugares o los objetos. La descripción sirve sobre todo para ambientar la acción y crear una atmósfera que haga más creíbles los  hechos que se narran.</p>
      </div>

      <div class="candidatosdes">
            <figure>
              <img src="../media/candidatos_lista_2/Eliana.png">
              <figcaption>  Elina Espín</figcaption>
            </figure>

            <h5> Tesorero</h5>
            <p>Postulante para Presidenta de la asociación Estudiantes del primer periodo del 2021
            Estudiante de la carrera de Química de septimo semestre.
            Ha participado en Describir es explicar, de forma detallada y ordenada, cómo son lasbpersonas, los lugares o los objetos. La descripción sirve sobre todo para ambientar la acción y crear una atmósfera que haga más creíbles los  hechos que se narran.</p>
      </div>



      <div class="candidatosdes">
            <figure>
              <img src="../media/candidatos_lista_2/Roberto.png">
              <figcaption>  Roberto Chang</figcaption>
            </figure>

            <h5> Secretaria</h5>
            <p>Postulante para Presidenta de la asociación Estudiantes del primer periodo del 2021
            Estudiante de la carrera de Química de septimo semestre.
            Ha participado en Describir es explicar, de forma detallada y ordenada, cómo son lasbpersonas, los lugares o los objetos.La descripción sirve sobre todo para ambientar la acción y crear una atmósfera que haga más creíbles los  hechos que se narran.</p>
      </div>  
        
      </div>        
  </div>

        
    

</main>



    
    
</body>
</html>