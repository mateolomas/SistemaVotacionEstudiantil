<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Panel de Admin</title>
    <link rel="stylesheet" href="admin.css" type="text/css" />
    <script rel="script" src="admin.js" type="text/javascript">
         
    </script>
</head>

<body onload="hidemain()">
    <nav>
        <a href="https://www.yachaytech.edu.ec"><img id="logoadmin" src="../../media/escuela_imath.png" /></a>
        <a onclick="leerf()">Leer Registros de estudiantes</a>
        <a onclick="findf()">Buscar estudiantes</a>
        <a onclick="anadirf()">Añadir registro al patron</a>
        <a onclick="actualf()">Actualizar Registros de Estudiantes</a>
        <a onclick="eliminarf()">Eliminar Registros de Estudiantes</a>
        <a  href="../../../logout.php"> Logout </a>

    </nav>

    <main >

        <div>
            <h1>Panel de Administracion del Sistema de Votacion Estudiantil</h1>
            <h2>En tu izquierda puedes encontrar las opciones para manejar la base de datos.</h2>
            

        </div>

        <div id="leer">
            <h3>Leer todo el patron electoral</h3>
            <form action="panel_admin.php">
                <table border="1">
                <tr><th>Cedula</th><th>Nombre</th><th>Apellido</th></tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "root", "SVE_BD");
                
                
                $sql = "SELECT * FROM infoest";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["cedula"]. "</td><td>" . $row["nombre"] . "</td><td>"
                    . $row["apellido"]. "</td></tr>";
                    }
                    echo "</table>";
                    } 

                $conn->close();

                ?>


                </table>

            </form>      

                
        </div>

        <div id="buscar">
            <h3>Buscar estudiante</h3>
            
        
                <input type="text" name="icedula" id="cedula" placeholder="Cedula">
                <h4>Resultado: </h4>
                <input id="nombre" placeholder="Nombres" readonly>
                <input id="apellido" type="text" placeholder="Apellido" readonly/>
                <input id="correo" type="text" placeholder="Correo" readonly/>
                <input id="voto" type="text" placeholder="Voto" readonly />
                <input id="password" type="text" placeholder="password" readonly/>
                <button onclick="buscarAl()">Buscar Estudiante</button>
            
        </div>

        <div id="anadir">
            <form action="anadir_alumno.php" method="post">
                <input type="text" name="cedula" placeholder="cedula">
                <input type="text" name="nombre" placeholder="nombre">
                <input type="text" name="apellido" placeholder="apellido">
                <label for= "genero"> Genero</label>
                <select name="genero" id="genero">
                        <option value="h"> Hombre</option>
                        <option value="m">Mujer</option>
                        <option value="o"> Otro</option>
                </select>
        
                <input type="submit" value="Añadir" id="submit_adir">
            </form>
        </div>

        

        <div id="actualizar">
            <h2> Por favor ingrese la cédula y luego todos los campos que desea actualizar </h2>
            <form action="actualizar_alumno.php" method="post">
                <div id= "heder_formact">
                    <input type="text" name="cedula" placeholder="cedula"> 
        
                    <input type="submit" value="Actualizar" id="submit_actul">
                </div>
        
                <div id="body_formact">
                    <input type="text" name="nombre" placeholder="nombre">
                    <input type="text" name="apellido" placeholder="apellido">
                    <label for= "genero"> Genero</label>
                    <select name="genero" id="genero">
                        <option value="h"> Hombre</option>
                        <option value="m">Mujer</option>
                        <option value="o"> Otro</option>
                    </select>
                    <br>
                    <input type="text" name="correo" placeholder="correo">
                    <input type="text" name="password" placeholder="password">
                </div>
                           
            </form>
        </div>

        <div id="Eliminar">

            <h3>Eliminar alumno del patron</h3>
            <form action="eliminar_alumno.php" method="post">
		        <input type="text" name="cedula" placeholder="Cedula">
		        <input type="submit" value ="Eliminar" class="submit_eliminar">
        	</form>
        </div>

    

    </main>
</body>

</html>