<?php


/*
* Crea la conexion con la base de datos con los parametros del config.php
* E: N/A
* S: Conection $con
* SQL: N/A
*/
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

/*
* Busca la canción seleccionada y manda los parrafos dentro de un array asociativo
* E: String cancion_id
* S: $row[]
* SQL:  select * from cancion join parrafos on parrafos.id_cancion= ? and cancion.id_cancion = ?;
*/
function cargar_cancion() {
	$mysqli = connection();

	if (!$mysqli->set_charset("utf8")) {
		printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
		exit();
	}
		// Pareparar el statement
		$sql = "select * from cancion join parrafos on parrafos.id_cancion= ? and cancion.id_cancion = ?";
		
		if($stmt = mysqli_prepare($mysqli, $sql)){
			// Enlazar las variables con el statement
			mysqli_stmt_bind_param($stmt, "ss", $val1, $val2);
			
			// Establecer los parametros
			$val1 = $_GET["cancion_id"];
			$val2 = $_GET["cancion_id"];

			// Ejecuta el statement
			if(mysqli_stmt_execute($stmt)){
				$result = mysqli_stmt_get_result($stmt);
				
				// Comprueba el numero de filas
				if(mysqli_num_rows($result) > 0){
					// Mete los resultados en un array asociatvo
					return $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
				} else{
					echo "<p>No hay parrafos en esta canción </p>";
				}
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
			}
		}
		 
		// Cierra el statement
		mysqli_stmt_close($stmt);

}


/*
* Carga los comentarios en cada parrafo de una canción
* E: String id_parrafo
* S: $row[]
* SQL: select comentarios.contenido from parrafos join comentarios on parrafos.id_parrafo = ? and comentarios.id_parrafo = ?;
*/
function cargar_comentario($id_parrafo) {
	$mysqli = connection();

	if (!$mysqli->set_charset("utf8")) {
		printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
		exit();
	}
		$sql = "select comentarios.contenido from parrafos join comentarios on parrafos.id_parrafo = ? and comentarios.id_parrafo = ?;";
		
		if($stmt = mysqli_prepare($mysqli, $sql)){
			mysqli_stmt_bind_param($stmt, "ss", $val1, $val2);
			
			$val1 = $id_parrafo;
			$val2 = $id_parrafo;

			if(mysqli_stmt_execute($stmt)){
				$result = mysqli_stmt_get_result($stmt);
				
				if(mysqli_num_rows($result) > 0){
					return $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
				} else{
					//nada
				}
			} else{
				return "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
			}
		}
		 
		mysqli_stmt_close($stmt);
}

/*
* Busca solo un parrafo en la base de datos (se utiliza al comentar, para ver el parrafo que estás comentando)
* E: String id_parrafo
* S: $row[1] (Un valor)
* SQL: select * from parrafos where id_parrafo = ?;
*/
function cargarUnParrafo($id_parrafo) {
	$mysqli = connection();

	if (!$mysqli->set_charset("utf8")) {
		printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
		exit();
	}
		// Prepare a select statement
		$sql = "select * from parrafos where id_parrafo = ?;";
		
		if($stmt = mysqli_prepare($mysqli, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "s", $val1);
			
			// Set parameters
			$val1 = $id_parrafo;

			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				$result = mysqli_stmt_get_result($stmt);
				
				// Check number of rows in the result set
				if(mysqli_num_rows($result) > 0){
					// Fetch result rows as an associative array
					$row = mysqli_fetch_row($result);
					return $row[1];
				} else{
					//nada
				}
			} else{
				return "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
			}
		}
		 
		// Close statement
		mysqli_stmt_close($stmt);
}

/*
* Inserta un comentario en la base de datos
* E: String id_parrafo, String comentario
* S: boolean
* SQL: insert into comentario(id_cancion, contenido) values (?, ?);
*/
function comment() {
	return true;
}

/*
* Consulta los parrafos de una canción y con ellos genera una imagen
* E: String id_cancion
* S: file imagen
* SQL: select * from canciones where id_cancion = ?;
*/
function songToImage() {
	return true;
}

?>