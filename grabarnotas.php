<?php
	require_once("conectar.php");
	 $ceduladocente =$_POST["ceduladocente"];
   $codigoestudiante =$_POST["codigoestudiante"];
   $codigomateria=$_POST["codigomateria"];	
   $valornota = $_POST["valornota"];
  	$sql="insert into notas(estudiantenota,materianota,docentenota,valornota) values(".$codigoestudiante.",'".$codigomateria."',".$ceduladocente.",".$valornota.")";
   $result=mysqli_query($conexion,$sql);
   if($result)
  	echo "Hemos agregado un registro";
  	else 
		echo "NO se agregaron datos";
	mysqli_close( $conexion );
     echo "<a href ='index.html'> Regresar </a>";
?>
