<?php
require_once("conectar.php");
    $consulta1 = "SELECT * FROM docentes";
    $consulta2 = "SELECT * FROM estudiantes";
    $consulta3 = "SELECT * FROM materias";
    $columna1 = mysqli_query($conexion, $consulta1 ) or die ( "Error en consulta base de datos");
    $columna2 = mysqli_query($conexion, $consulta2 ) or die ( "Error en consulta base de datos"); 
    $columna3 = mysqli_query($conexion, $consulta3 ) or die ( "Error en consulta base de datos"); 
?>
<html>
<head>
<title> Formulario Notas </title>
</head>
<body>
<form name="f1" id="f1" method="post" action="grabarnotas.php">
 <h1>Captura Notas</h1> <br>
 Docente: 
            <select name="ceduladocente">
            <?php
            while ($rs1 = mysqli_fetch_array($columna1)) {
             echo "<option value=".$rs1[0].">".$rs1[1]."</option>";           
                }                                               
            ?>
            </select>
  <br>
 Estudiante: 
           <select name="codigoestudiante">
            <?php
            while ($rs2 = mysqli_fetch_array($columna2)) {
             echo "<option value=".$rs2[0].">".$rs2[1]."</option>";           
                }                                               
            ?>
            </select>
  <br>
 Asignatura: 
           <select name="codigomateria">
            <?php
            while ($rs3 = mysqli_fetch_array($columna3)) {
             echo "<option value=".$rs3[0].">".$rs3[1]."</option>";           
                }                                               
            ?>
            </select>
  <br>
 Valor Nota: <input type="number" name="valornota" id="valornota" min="0" max="5" step="0.1">
 <br>
<br>
<input type="submit" value="Grabar Notas">
</form>
</body>
</html>