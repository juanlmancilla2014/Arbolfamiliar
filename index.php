<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styletabla.css"/> 
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" href="logo.ico">
<meta charset="utf-8">
<title>Arbol de Maria Herrera</title>
<?php 
/* Nombre de archivos que contienen las clases del arbol geneologico */
require("principal.php");
require("nietos.php");
?>
<font color="#DBDBDB"><h1>Arbol Genealogico</h1></font>
</head>

<body bgcolor="#999999">
<center>
<?php
   /* Instanciacion de todas las clases existentes en los archivos antes requeridos */

     $abuela = new Principal();
	 $conyuge = new yerna();
	 $conyugenieto = new bizyerna();
	 $biznietos = new biznietos();
	 
	 /* En esta parte se utiliza la funcion ->bizabuela(); para intercambia el dato de retorno para la variable $nombrePrincipal */
	 $nombrePrincipal = $abuela->bizabuela();
?>
   <table cellpadding="18px" background="arbol-genealogico.jpg"><!--Cada celda de esta tabla corresponde a la señalizacion de los hijos y nietos de Maria Herrara, les voy a señalar los lugares donde esta cada uno de estos familiares-->
    <tr>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td></td>
       <td></td>
       <td class="principal"><?php  echo $nombrePrincipal; /*Utilizacion del nombre de Maria Herrera*/ ?></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td></td>
       <td></td>
       <td class="diagonal"><span class="icon-arrow-down-left2" style="font-size:28px"></span><font size="+1">Hijo</font></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td></td>
       <td class="hijo"><?php echo $abuela->hijo($nombrePrincipal); ?></td><!--El hijo, que su nombre aparece con el nombre de la Abuela-->
       <td><center><span class="icon-arrow-left2" style="font-size:24px"></span><font size="+1"> &nbsp; Conyuges &nbsp; </font><span class="icon-arrow-right2" style="font-size:24px"></span></center></td>
       <td class="yerna"><?php echo $conyuge->conyuge($abuela->hijo($nombrePrincipal)); ?></td>
       <td></td><!--La Yerna, la cual necesita agregar el nombre del hijo y el nombre Principal para poder mostrar a su conyuge-->
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td></td>
       <td></td>
       <td class="abajo"><center><span class="icon-arrow-down2" style="font-size:22px"></span><font size="+1">Nieto</font></center></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td></td>
       <td></td>
       <td class="nieto"><?php echo $abuela->nieto($nombrePrincipal); ?></td><!--El nieto, tiene el mismo proceso anterior-->
       <td><center><span class="icon-arrow-left2" style="font-size:22px"></span> &nbsp; Conyuges &nbsp; <span class="icon-arrow-right2" style="font-size:22px"></span></center></td>
       <td class="conyugenieta"><?php echo $conyugenieto->conyugenieto($abuela->nieto($nombrePrincipal)); ?></td>
       <td></td><!--La Conyuge Nieta, la cual necesita agregar el nombre del nieto y el nombre Principal para poder mostrar a su conyuge-->
     </tr>
      <tr>
       <td></td>
       <td></td>
       <td></td>
       <td class="abajo"><center><span class="icon-arrow-down2" style="font-size:24px"></span>Biznieto</center></td>
       <td></td>
       <td class="abajo"><center><span class="icon-arrow-down2" style="font-size:24px"></span>Sobrino Biznieto</center></td>
       <td></td>
     </tr>
      <tr>
       <td></td>
       <td></td>
       <td></td>
       <td class="biznieto"><?php echo $biznietos->biznieto($abuela->nieto($nombrePrincipal)); ?></td>
       <td></td><!--El biznieto, necesita agregar el nombre del nieto y el nombre de la abuela para mostrarse ya que es un biznieto natural-->
       <td class="sobrinobiznieto"><?php echo $biznietos->biznieto($conyugenieto->conyugenieto($abuela->nieto($nombrePrincipal))); ?></td>
       <td></td><!--El sobrino biznieto, necesita agregar el nombre de la esposa del nieto, el nombre del nieto y el nombre de la abuela para mostrarse ya que es un biznieto proveniendo solamente de Florelia Santander-->
     </tr>
      <tr>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>
   </table>   
</center>
</body>
</html>