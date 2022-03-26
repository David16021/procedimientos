<?php
   require_once("conectar.php");
   $codigoestudiante =$_POST["codigoestudiante"];
   $nombreestudiante =$_POST["nombreestudiante"];
   $apellidosestudiante=$_POST["apellidosestudiante"];	
   $fechanacimiento = $_POST["fechanacimiento"]; 
   $generoestudiante = $_POST["generoestudiante"]; 

 $statement = $conexion ->prepare("CALL insert_estudiante(?,?,?,?,?)");
 //echo $statement;
$statement ->bind_param("sssss",$codigoestudiante,$nombreestudiante,$apellidosestudiante,$fechanacimiento,$generoestudiante);
if($statement->execute())
  echo "Hemos agregado un registro";
    else 
    echo "NO se agregaron datos";
$statement->close();
$conexion->close();
 echo "<a href ='index.html'> Regresar </a>";
?>