<?php

/*
*	Muestra el encabezado
*	E:
*	S:
*	SQL:
*/
function show_header($titulo = "AyLaMúsica"){
	echo '<!DOCTYPE html>
			<html>
			<head>
			<title>'.$titulo.'</title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" type="text/css" href="view/css/estilos-body.css">
			</head>
			<body>
    ';
}


?>