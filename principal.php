<?php
/*Nombre de la clase principal donde esta las funciones de bizabuela, hijo y nieto que se refiere a los miembros naturales*/
class Principal {
	
 var $nombre;
 var $nombreabue;
 var $nombrenieto;

function bizabuela(){
	
  $nombreabue = "Maria Herrera";
  return $nombreabue;
  
}

function hijo($madre){
   if ($madre != ""){
       $nombre = "Jesus Garcia";
	   return $nombre;
   }else{
	    $nombre = "";
	   return $nombre;
   }
   
}

function nieto($abuela){
  if ($abuela != ""){
      $nombrenieto = "Isidro Garcia";
	  return $nombrenieto;
  }else{
	  $nombrenieto = "";
	  return $nombrenieto;
  }
 
}

}
/*Esta clase se refiere al conyuge del hijo*/
class yerna{
	
 var $nombreyerna;

function conyuge($esposos){
	if($esposos != ""){
	    $nombreyerna = "Yolanda Zambrano";
	    return $nombreyerna;
	}else{
		$nombreyerna = "";
	    return $nombreyerna;
	}
}
	
}
/*Esta clase se refiere al conyuge del nieto*/
class bizyerna{
var $nombrebizyerna;


function conyugenieto($esposos){
	if($esposos != ""){
	    $nombrebizyerna = "Florelia Santander";
	    return $nombrebizyerna;
	}else{
		$nombrebizyerna = "";
	    return $nombrebizyerna;
	}
}


}

?>