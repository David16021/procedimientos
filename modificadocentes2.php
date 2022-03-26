<html><head></head>
<body>
<?php
   require_once("conectar.php");
   $ceduladocente =$_POST["ceduladocente"];
   $nombresdocente =$_POST["nombresdocente"];
   $apellidosdocente=$_POST["apellidosdocente"];
   $emaildocente = $_POST["emaildocente"];
$statement = $conexion ->prepare("CALL update_docentes(?,?,?,?)");
$statement ->bind_param("ssss",$ceduladocente,$nombresdocente,$apellidosdocente,$emaildocente);
if($statement->execute())
  echo "Registro modificado";
    else 
    echo "Registro NO modificado";
$statement->close();
$conexion->close();
 echo "<a href ='index.html'> Regresar </a>";
 ?>
</body>
</html>