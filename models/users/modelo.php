<?php

function connection() {
	include 'config.php';
		try{
		
		// Crear la conexión
		$con = mysqli_connect($BD_DIRECCION, $BD_USUARIO, $BD_PASS, $BD_NOMBRE);
	
		//Devuelve una variable tipo conexión
		return $con;

	}catch(Exception $e) {

        die('Error: ' . $e->GetMessage());

    }
	
}

function cargar_cancion($id_cancion) {
	$mysqli = connection();
	
	if (mysqli_connect_errno()) {
		printf("Falló la conexión: %s\n", mysqli_connect_error());
		exit();
	}
	$consulta = "select * from cancion join parrafos on parrafos.id_cancion=1 and cancion.id_cancion = ?";
	$sentencia = $mysqli->prepare($consulta);
	$sentencia->bind_param("s", $val1);

	$val1 = $id_cancion;

	
	
	// Attempt to execute the prepared statement
	if(mysqli_stmt_execute($stmt)){
		$result = mysqli_stmt_get_result($stmt);
		
		// Check number of rows in the result set
		if(mysqli_num_rows($result) > 0){
			//Llama a show_songs(), y le pasa todos los parametros para mostrar los parrafos
			show_songs();
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

	
}
//Busqueda de una cancion en la base de datos
function searchSong() {

}

//Insert de un coment en un parrafo seleccionado
//Recibe el numero de parrafo
function comment() {

}

//Devuelve los datos a la funcion que crea la imagen
function songToImage() {

}

?>