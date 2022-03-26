<?php
	require_once("conectar.php");
?>
 <body>
 	<h1> Consulta Estudiante </h1>
   <fieldset>
 	<form method="POST" action="consultaestudiante2.php">
 		<input type="text" name="codigoestudiante">
		<input type="submit" value="Buscar Estudiante">
	</form>
</fieldset>
<?php
    if(isset($_POST['codigoestudiante'])) {
		$codigoestudiante=$_POST['codigoestudiante'];
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

    mysqli_multi_query ($conexion, "CALL select2_estudiante($codigoestudiante)") OR DIE (mysqli_error($conexion));
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
	}

?>
</body>