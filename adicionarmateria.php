<?php
require_once("conectar.php");
?>
<html>
<head>
<title> Formulario Materia </title>
<script language="JavaScript">
function validacion(formulario) {
  var listanumeros9";
var codigomateria=formulario.codigomateria.value;
 
  if(codigomateria.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  

var nombremateria=formulario.nombremateria.value;
var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(nombremateria.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos nombres docente
    cont = 0;
        for(n=0;n<nombremateria.length;n++)
 {
      ch = nombremateria.charAt(n);
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

 if(cont < nombremateria.length)
  
  {
    alert("El campo nombre Materia tiene caracteres no reconocidos");
    formulario.nombremateria.focus();
    return (false);   
}

var creditosmateria=formulario.creditosmateria.value;

  if(creditosmateria.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  
  }
  
// validar caracteres NO reconocidos creditos materia
    cont = 0;
        for(n=0;n<creditosmateria.length;n++)
 {
      ch = creditosmateria.charAt(n);
        for (m=0;m<listanumeros.length; m++)

 {
          if(ch ==listanumeros.charAt(m))

    {

              cont = cont + 1;
    m = listanumeros.length;
    break;
      
      }     
 }  
 }

 if(cont < creditosmateria.length)
  
  {
    alert("El campo creditos materias tiene caracteres no reconocidos");
    formulario.creditosmateria.focus();
    return (false);   
}

   
}  
</script>

</head>
<body>
<form name="f1" id="f1" method="post" action="grabarmateria.php" OnSubmit="return validacion(this);">
 <h1>Captura  Materias</h1> <br>
 Codigo Materia: <input type="text" name="codigomateria" id="codigomateria">
 <br>
 Nombre Materia: <input type="text" name="nombremateria" id="nombremateria">
 <br>
 Creditos materia: <input type="text" name="creditosmateria" id="creditosmateria">
 <br>
<br>
<input type="submit" value="Grabar Materias">
</form>
</body>
</html>

