<?php
	//creacion de un arreglo
	$cosas = array("tablero", "mesa","compu");
	
    $cosas[]="cable";

	print_r($cosas);
	
    //eliminar algun valor
	
    $eliminarcosa = "tablero";

	
    $llave = array_search($eiminarcosa, $cosas);
	
    //condicion de si debe ejecutar despues de eliminar un objeto
	
    if($llave!==false){

	  unset($cosas[$llave]);
	}
	print_r($cosas);
	
?>
