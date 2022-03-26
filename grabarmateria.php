<?php
  require_once("conectar.php");
   $codigomateria =$_POST["codigomateria"];
   $nombremateria =$_POST["nombremateria"];
   $creditosmateria=$_POST["creditosmateria"];	

 $statement = $conexion ->prepare("CALL insert_materias(?,?,?)");
 //echo $statement;
$statement ->bind_param("sss",$codigomateria,$nombremateria,$creditosmateria);
if($statement->execute())
  echo "Hemos agregado una materia";
    else 
    echo "NO se agregaron materias";
$statement->close();
$conexion->close();
 echo "<a href ='index.html'> Regresar </a>";
?>

