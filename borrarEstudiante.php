<?php
	require_once("conectar.php");
?>
 <body>
 	<h1> Eliminar Estudiante </h1>
   <fieldset>
 	<form method="POST" action="borrarEstudiante.php">
 		<input type="text" name="codigoestudiante">
		<input type="submit" value="Buscar Estudiante">
	</form>
</fieldset>
<?php
    if(isset($_POST['codigoestudiante'])) {
    $consulta1 = "SELECT * FROM notas where estudiantenota=".$_POST["codigoestudiante"];
    $resultado = mysqli_query($conexion, $consulta1);
    $row_cnt = mysqli_num_rows($resultado);
    if($row_cnt >= 1){
			echo "NO SE PUEDE ELIMINAR EL REGISTRO PORQUE TIENE NOTAS ASOCIADAS"."<br>";      
      		echo "<a href ='index.html'> Regresar </a>";
      }
ELSE 
    { 
    $consulta2 = "DELETE FROM estudiantes where codigoestudiante=".$_POST["codigoestudiante"];
   // echo $consulta1;
    $result = mysqli_query($conexion, $consulta2 ) or die ( "Error en consulta base de datos");
	if($result)
  	echo "Hemos ELIMINADO un registro";
  	else 
		echo "NO se HA ELIMINADO el registro";
	mysqli_close( $conexion );

   echo "<br>";
   echo "<a href ='index.html'> Regresar </a>";
}
}
?>
</body>