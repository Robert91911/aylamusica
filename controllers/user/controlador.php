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

function cargarCancion() {
    $cancion = isset($_POST['inputBuscador']);

	$mysqli = connection();
	$usuario = $_SESSION['user'];
    $consulta = "SELECT * FROM cancion WHERE titulo = ?";
    
    mysqli_stmt_bind_param($stmt, "s", $param_term);

	if ($resultado = $mysqli->query($consulta)) {

    /* obtener el array de objetos */
    if ($fila = $resultado->fetch_row()) {
        return $fila[0];
	}else
		return "Error al obtener el estado	";
    /* liberar el conjunto de resultados */
    $resultado->close();
}


?>
