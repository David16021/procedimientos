<?php
require_once("conectar.php");
?>
<html>
<head>
<title> Estudiante</title>
<script language="JavaScript">
function validacion(formulario) {
  var listanumeros = "0123456789";
var codigoestudiante=formulario.codigoestudiante.value;
 
  if(codigoestudiante.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<codigoestudiante.length;i++)
  {
    ch = codigoestudiante.charAt(i);
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
  if(cont < codigoestudiante.length)
  {
    alert("El campo cedula tiene caracteres NO validos");
    formulario.codigoestudiante.focus();
    return (false);   
  }  

var nombreestudiante=formulario.nombreestudiante.value;
var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(nombreestudiante.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos nombres docente
    cont = 0;
        for(n=0;n<nombreestudiante.length;n++)
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

 if(cont < nombreestudiante.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.nombreestudiante.focus();
    return (false);   
}

var apellidosestudiante=formulario.apellidosestudiante.value;

  if(apellidosestudiante.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  
  }
  
// validar caracteres NO reconocidos apellidos docente
    cont = 0;
        for(n=0;n<apellidosestudiante.length;n++)
 {
      ch = apellidosestudiante.charAt(n);
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

 if(cont < apellidosestudiante.length)
  
  {
    alert("El campo apellidos tiene caracteres no reconocidos");
    formulario.apellidosestudiante.focus();
    return (false);   
}

 var fechanacimiento=formulario.fechanacimiento.value;

  if(fechanacimiento.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
   
} 

var generoestudiante=formulario.generoestudiante.value;

  if(generoestudiante.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  
  }
  
// validar caracteres NO reconocidos apellidos docente
    cont = 0;
        for(n=0;n<generoestudiante.length;n++)
 {
      ch = apellidosestudiante.charAt(n);
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

 if(cont < generoestudiante.length)
  
  {
    alert("El campo apellidos tiene caracteres no reconocidos");
    formulario.generoestudiante.focus();
    return (false);   
}
</script>

</head>
<body>
<form name="f1" id="f1" method="post" action="grabarestudiante.php" OnSubmit="return validacion(this);">
 <h1>Captura  Estudiantes</h1> <br>
 Cedula Estudiante: <input type="text" name="codigoestudiante" id="codigoestudiante">
 <br>
 Nombre Estudiante: <input type="text" name="nombreestudiante" id="nombreestudiante">
 <br>
 Apellidos Estudiante: <input type="text" name="apellidosestudiante" id="apellidosestudiante">
 <br>
 Fecha Nacimiento: <input type="text" name="fechanacimiento" id="fechanacimiento">
 <br>
 <br>
 Genero: <input type="text" name="generoestudiante" id="generoestudiante">
 <br>



<br>
<input type="submit" value="Grabar Estudiante">
</form>
</body>
</html>
