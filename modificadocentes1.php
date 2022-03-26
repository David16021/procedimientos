<?php
	require_once("conectar.php");
?>
<html>
<head>
<title> Formulario Docentes </title>
<script language="JavaScript">
function validacion(formulario) {
  var listanumeros = "0123456789";
var ceduladocente=formulario.ceduladocente.value;
 
  if(ceduladocente.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<ceduladocente.length;i++)
  {
    ch = ceduladocente.charAt(i);
    for (j=0;j<listanumeros.length; j++)
    {
      if(ch ==listanumeros.charAt(j))
       {
         cont = cont + 1;
         j = listanumeros.length;
         break;
       }       
    }  
  }
  if(cont < ceduladocente.length)
  {
    alert("El campo cedula tiene caracteres NO validos");
    formulario.ceduladocente.focus();
    return (false);   
  }  

var nombresdocente=formulario.nombresdocente.value;
var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(nombresdocente.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos nombres docente
    cont = 0;
        for(n=0;n<nombresdocente.length;n++)
 {
      ch = nombresdocente.charAt(n);
        for (m=0;m<listabecedario.length; m++)

 {
          if(ch ==listabecedario.charAt(m))

    {

              cont = cont + 1;
    m = listabecedario.length;
    break;
      
      }     
 }  
 }

 if(cont < nombresdocente.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.nombresdocente.focus();
    return (false);   
}

var apellidosdocente=formulario.apellidosdocente.value;

  if(apellidosdocente.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  
  }
  
// validar caracteres NO reconocidos apellidos docente
    cont = 0;
        for(n=0;n<apellidosdocente.length;n++)
 {
      ch = apellidosdocente.charAt(n);
        for (m=0;m<listabecedario.length; m++)

 {
          if(ch ==listabecedario.charAt(m))

    {

              cont = cont + 1;
    m = listabecedario.length;
    break;
      
      }     
 }  
 }

 if(cont < apellidosdocente.length)
  
  {
    alert("El campo apellidos tiene caracteres no reconocidos");
    formulario.apellidosdocente.focus();
    return (false);   
}

 var emaildocente=formulario.emaildocente.value;

  if(emaildocente.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
   
}  
</script>

</head>
 <body>
 	<h1> Modificar Docentes </h1>
   <fieldset>
 	<form method="POST" action="modificadocentes1.php">
 		<input type="text" name="ceduladocente">
		<input type="submit" value="Buscar Docente">
	</form>
</fieldset>
<?php
    if(isset($_POST['ceduladocente'])) { 
    $consulta1 = "SELECT * FROM docentes where ceduladocente=".$_POST["ceduladocente"];
    $columna1 = mysqli_query($conexion, $consulta1 ) or die ( "Error en consulta base de datos");
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	echo "<form name='f1' id='f1' method='post' action ='modificadocentes2.php' OnSubmit='return validacion(this);'>";
	while ($filas = mysqli_fetch_array( $columna1))
	{
		echo "<br>";
		echo " Cedula Docente " ;
		echo "<input name ='ceduladocente' type ='text' readonly value='".$filas[0]."'>";
		echo "<br>";
		echo "Nombres Docente  " ;		
		echo "<input name ='nombresdocente' type ='text' value='".$filas[1]."'>";
		echo "<br>";
		echo "Apellidos Docente  " ;		
		echo "<input name ='apellidosdocente' type ='text' value='".$filas[2]."'>";
		echo "<br>";
		echo " Email Docente " ;		
		echo "<input name ='emaildocente' type ='text' value='".$filas[3]."'>";
		echo "<br>";		
	}	
	   echo "<input type ='submit' value ='Actualizar'>";
	   echo "</form>";	   
	// cerrar conexi�n de base de datos
	mysqli_close( $conexion );
}
?>
</body>
