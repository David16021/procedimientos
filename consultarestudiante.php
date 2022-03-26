<?php
//require_once("menu.php");
require_once("conectar.php");
  //  $cedula=$_POST["ceduladocente"];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Cedula Estudiante </th>";
	echo "<th>Nombres Estudiante</th>";
	echo "<th>Apellidos Estudiante </th>";
	echo "<th>Fecha Nacimiento</th>";
	echo "<th>Genero</th>";
	echo "</tr>";

    mysqli_multi_query ($conexion, "CALL selec_estudiante()") OR DIE (mysqli_error($conexion));
    if ($result = mysqli_store_result($conexion)) {
       while ($filas = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $filas["codigoestudiante"]. "</td><td>" .$filas["nombreestudiante"]."</td><td>". $filas["apellidosestudiante"]. "</td><td>" . $filas["fechanacimiento"]."</td><td>".$filas["generoestudiante"]."</td>";
			echo "</tr>";               
        }
            mysqli_free_result($result);
       }
	echo "</table>"; 
	echo "<br>";	
	$conexion->close();
	echo "<a href='index.html'>Regresar </a>";     
?>