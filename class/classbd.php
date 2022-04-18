<?php
	$conexion = new mysqli('localhost', 'userTienda', '123', 'tienda');
	
	if($conexion->connect_error){
		
		echo('Error en la conexion' . $conexion->connect_error);	
	}
?>