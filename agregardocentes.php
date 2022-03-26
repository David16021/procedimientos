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
<form name="f1" id="f1" method="post" action="grabardocentes.php" OnSubmit="return validacion(this);">
 <h1>Captura  Docentes</h1> <br>
 Cedula Docente: <input type="text" name="ceduladocente" id="ceduladocente">
 <br>
 Nombre Docente: <input type="text" name="nombresdocente" id="nombresdocente">
 <br>
 Apellidos Docente: <input type="text" name="apellidosdocente" id="apellidosdocente">
 <br>
 Email Docente: <input type="text" name="emaildocente" id="emaildocente">
 <br>
<br>
<input type="submit" value="Grabar Docente">
</form>
</body>
</html>

