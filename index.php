<html>
<head>
	<title>Ejericio 9</title>
</head>
<body>

	<h1>Agenda</h1>
	<h3>Introduzca su nombre y correo electronico.</h4>
	<h4>En caso de haber escrito mal el correo, vuelva a introducir el nombre con el correo bien escrito.</h5>

	<form action="" method="GET">
		Nombre:<input type="text" name="nombre">
		Correo:<input type="text" name="correo">
		<input type="submit" name="" value="comprobar">
	</form>

	<?php

	//$nombre = ;
	//$correo = ;

	$comprobar = comprobarNombre($_GET['nombre'], $_GET['correo']);

	/*

		Mi base de datos va a funcionar tal que si meto un nombre con un array, la relacion que van
		a tener es la posicion en cada array, independientemente de si has introducido correo o no.

		$arrNombres[1] = 'Ander';
		$arrCorreos[1] = 'agonzalezro17dw@ikzubirimanteo.com'   # Si no introduces correo seria ""

	*/
	$arrNombres = ["Ander", "Mikel"];
	$arrCorreos = ["Gonzalez", "Arroniz"];


	// Funcion para mostrar los datos de la base de datos
	function enviarDatos($arrNombres, $arrCorreos){
		// Recorro el array de nombres para poder mostrar ambos
		for ($i=0; $i < count($arrNombres); $i++) { 
			// Muestro tanto el nombre como su correo asociado
			echo "<h5>".$arrNombres[$i]."</h5>";
			echo "<h6>".$arrCorreos[$i]."</h6>";
		}
	}

	// Funcion para comprobar si el nombre ya existe
	function comprobarNombre($nombre, $correo){
		// Recorro la lista de nombres
		for ($i=0; $i < count($arrNombres); $i++) { 
			// Compruebo si el nombre se repite
			if ($nombre === $arrNombres[$i]) {
				// Si se repite actualizo el correo
				$arrCorreos[$i] = $correo;
				echo(enviarDatos($arrNombres, $arrCorreos));
			}else{
				// Si no se repite el nombre, añado tanto el nombre como el correo a la 'base de datos'
				array_push($arrNombres, $nombre);
				array_push($arrCorreos, $correo);
				echo(enviarDatos($arrNombres, $arrCorreos));
			}
		}
	}

	?>


</body>
</html>
