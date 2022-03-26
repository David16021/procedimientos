<?php
   require_once("conectar.php");
   $ceduladocente =$_POST["ceduladocente"];
   $nombresdocente =$_POST["nombresdocente"];
   $apellidosdocente=$_POST["apellidosdocente"];	
   $emaildocente = $_POST["emaildocente"]; 

 $statement = $conexion ->prepare("CALL insert_docentes(?,?,?,?)");
 //echo $statement;
$statement ->bind_param("ssss",$ceduladocente,$nombresdocente,$apellidosdocente,$emaildocente);
if($statement->execute())
  echo "Hemos agregado un registro";
    else 
    echo "NO se agregaron datos";
$statement->close();
$conexion->close();
 echo "<a href ='index.html'> Regresar </a>";
?>
