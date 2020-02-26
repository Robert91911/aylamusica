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

function cargar_cancion() {
	$mysqli = connection();

	if (!$mysqli->set_charset("utf8")) {
		printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
		exit();
	}

	

		// Prepare a select statement
		$sql = "select * from cancion join parrafos on parrafos.id_cancion= ? and cancion.id_cancion = ?";
		
		if($stmt = mysqli_prepare($mysqli, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "ss", $val1, $val2);
			
			// Set parameters
			$val1 = $_GET["cancion_id"];
			$val2 = $_GET["cancion_id"];

			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				$result = mysqli_stmt_get_result($stmt);
				
				// Check number of rows in the result set
				if(mysqli_num_rows($result) > 0){
					// Fetch result rows as an associative array
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
						 echo '<li><a href=index.php?cmd=id_parrafo&parrafo_id='.$row['id_parrafo'].'><p>'.$row['contenido'].'</p></a></li>';
					}
				} else{
					echo "<p>No hay parrafos en esta canción </p>";
				}
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
			}
		}
		 
		// Close statement
		mysqli_stmt_close($stmt);

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