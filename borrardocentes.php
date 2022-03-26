<?php
	require_once("conectar.php");
?>
 <body>
 	<h1> Eliminar Docentes </h1>
   <fieldset>
 	<form method="POST" action="borrardocentes.php">
 		<input type="text" name="ceduladocente">
		<input type="submit" value="Buscar Docente">
	</form>
</fieldset>
<?php
    if(isset($_POST['ceduladocente'])) {
    $consulta1 = "SELECT * FROM notas where docentenota=".$_POST["ceduladocente"];
    $resultado = mysqli_query($conexion, $consulta1);
    $row_cnt = mysqli_num_rows($resultado);
    if($row_cnt >= 1){
			echo "NO SE PUEDE ELIMINAR EL REGISTRO PORQUE TIENE NOTAS ASOCIADAS"."<br>";      
      		echo "<a href ='index.html'> Regresar </a>";
      }
ELSE 
    { 
    $consulta2 = "DELETE FROM docentes where ceduladocente=".$_POST["ceduladocente"];
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
