<?php
//require_once("menu.php");
require_once("conectar.php");
  //  $cedula=$_POST["ceduladocente"];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Cedula Docente </th>";
	echo "<th>Nombres Docente</th>";
	echo "<th>Apellidos Docente </th>";
	echo "<th>Email Docente</th>";
	echo "</tr>";

    mysqli_multi_query ($conexion, "CALL select_docentes()") OR DIE (mysqli_error($conexion));
    if ($result = mysqli_store_result($conexion)) {
       while ($filas = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $filas["ceduladocente"]. "</td><td>" .$filas["nombresdocente"]."</td><td>". $filas["apellidosdocente"]. "</td><td>" . $filas["emaildocente"]."</td>";
			echo "</tr>";               
        }
            mysqli_free_result($result);
       }
	echo "</table>"; 
	echo "<br>";	
	$conexion->close();
	echo "<a href='index.html'>Regresar </a>";     
?>