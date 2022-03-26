<?php
	require_once("conectar.php");
?>
 <body>
 	<h1> Consulta Materias </h1>
   <fieldset>
 	<form method="POST" action="Consultamaterias2.php">
 		<input type="text" name="Codigo Materia">
		<input type="submit" value="Buscar Materia">
	</form>
</fieldset>
<?php
    if(isset($_POST['codigomateria'])) {
      $codigomateria=$_POST['codigomateria'];
echo "<table border='1'>";
  echo "<tr>";
  echo "<th>Codigo Materia </th>";
  echo "<th>Nombre Materia </th>";
  echo "<th>Creditos Materia </th>";
  echo "</tr>";
 mysqli_multi_query ($conexion, "CALL select2_materias($codigomateria)") OR DIE (mysqli_error($conexion));
    if ($result = mysqli_store_result($conexion)) {
       while ($filas = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $filas["codigomateria"]. "</td><td>" .$filas["nombremateria"]."</td><td>". $filas["creditosmateria"]. "</td><td>" ;
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