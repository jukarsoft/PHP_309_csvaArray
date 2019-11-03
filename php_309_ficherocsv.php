<?php 
	//crear array vacio
	$estudiantes = array();
	//abrir fichero en modo lectura
	$fichero=fopen('estudiantes.csv','r');
	//recorrer el fichero hasta el final
	while (!feof($fichero)) {
		// leer la fila
		$fila=fgets($fichero);
		// convertir la fila en array
		$arrayFila=explode(',', $fila);
		//guardar la fila en el array estudiantes
		array_push($estudiantes, $arrayFila);
	}
	//ver 
	print_r($estudiantes);
	//cerrar fichero
	fclose($fichero);

	//construir html
	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <table>
 	
 </table>
 </body>
 </html>