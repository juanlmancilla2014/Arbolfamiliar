<?php
/*Esta clase se usa para elegir a los biznietos dependiendo cual sean los padres de esos biznietos*/
class biznietos{

var $biznieto;

function biznieto($Padres){
	
	if ($Padres == "Isidro Garcia"){
		$biznieto = "Antonio Garcia";
		return $biznieto;
	}else if($Padres == "Florelia Santander"){
		$biznieto = "Norelis Santander";
		return $biznieto;
	}else if($Padres != "Florelia Santander" || $Padres != "Isidro Garcia"){
		$biznieto = "";
		return $biznieto;
	}
	
}
	
}


?>