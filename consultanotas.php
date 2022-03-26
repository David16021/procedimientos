<html> <head> </head>
<body>
<?php
require_once("menu.php");
require_once("conectar.php");
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Consecutivo </th>";
	echo "<th>Codigo Estudiante</th>";
	echo "<th>Código Materias</th>";
	echo "<th>Cedula Docente</th>";
	echo "<th>Valor Nota</th>";
	echo "</tr>";	
		$consulta1 = "SELECT * FROM notas";		
	    $columna1 = mysqli_query($conexion,$consulta1 ) or die ( "Error en consulta base de datos"); 
	    while($filas = mysqli_fetch_array($columna1))
	      {
          	echo "<tr>";
			echo "<td>".$filas[0]."</td><td>".$filas[1]."</td><td>". $filas[2]. "</td><td>".$filas[3]."</td><td>".$filas[4]."</td>";
			echo "</tr>";
		  }	
	echo "</table>"; // Fin de la tabla
	echo "<br>";
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>
<a href="index.html"> Regresar </a>    
</body>
</html>
