<?php
//require_once("menu.php");
require_once("conectar.php");
  //  $cedula=$_POST["ceduladocente"];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Codigo Materia </th>";
	echo "<th>Nombre materia</th>";
	echo "<th>Creditos Materia </th>";
	echo "</tr>";

    mysqli_multi_query ($conexion, "CALL select_materias()") OR DIE (mysqli_error($conexion));
    if ($result = mysqli_store_result($conexion)) {
       while ($filas = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $filas["codigomateria"]. "</td><td>" .$filas["nombremateria"]."</td><td>". $filas["creditosmateria"]. "</td><td>";
			echo "</tr>";               
        }
            mysqli_free_result($result);
       }
	echo "</table>"; 
	echo "<br>";	
	$conexion->close();
	echo "<a href='index.html'>Regresar </a>";     
?>