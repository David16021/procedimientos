<?php
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "modelonotas7";	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No hay conexion al servidor");
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "NO hay conexión a la B.de D." );
?>




