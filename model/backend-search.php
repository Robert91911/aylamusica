<?php

/*
* Cada vez que se escribe un caracter en el buscador hace una consulta a la base de datos y actualiza los resultados
* E: String term
* S: String
* SQL: "SELECT * FROM cancion WHERE titulo LIKE ?";
*/

include_once(__DIR__.'/../config.php');

$link = mysqli_connect($BD_DIRECCION, $BD_USUARIO, $BD_PASS, $BD_NOMBRE);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])) {
    // Pareparar el statement
    $sql = "SELECT * FROM cancion WHERE titulo LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Enlazar las variables con el statement
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Establecer los parametros
        $param_term = $_REQUEST["term"] . '%';
        
        // Ejecuta el statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Comprueba el numero de filas
            if(mysqli_num_rows($result) > 0){
                // Mete los resultados en un array asociatvo
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
                     echo '<li class="lista_buscador"><a href=index.php?cmd=mostrar_cancion&cancion_id='.$row['id_cancion'].'><p>'.$row['titulo'], " ● " , $row['artista'].'</p></a></li>'; // cmd=mostrar_cancion&id_cancion = . $row['id_cancion'] .
                }
            } else{
                echo "<p>No se han encontrado canciones</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    
    mysqli_stmt_close($stmt);
}
 
// Cierra la conexion
mysqli_close($link);
?>