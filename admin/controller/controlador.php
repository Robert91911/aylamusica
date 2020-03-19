<?php

/*
*	Muestra el contenido de la parte central de la página, tambien comprueba si el usuario es administrador o no, mostrando cosas diferentes.
*	E:
*	S:
*	SQL:
*/
function show_content() {

	if ($_SERVER['REQUEST_METHOD'] == 'GET') {	// GET
		if (!isset($_GET['cmd'])) {				// carga inicial de la página
			show_login();
		}
		else {				//Get de un usuario admin logueado
			switch ($_GET['cmd']) {
				case 'subirCancion':
					show_subir_cancion();
					break;

				case 'modoMantenimiento':
					cambiar_mantenimiento(); //No hay que cargar ningún HTML
					break;

				case 'verLog':
					show_ver_log();
					break;

				case 'exportarImportar':
					show_exportar_importar();
					break;

				case 'adminAnuncios':
					show_admin_anuncios();
					break;

				case 'correoPatrocinadores':
					show_correo_patrocinadores();
					break;

				case 'passAcceso':
					show_pass_acceso();
					break;

				case 'diccionarioInsultos':
					show_diccionario_insultos();
					break;


				default:
					"error de conexión";
					break;
			}
		}
	}
	else {											// POST

		if(isset($_POST['login'])){ //Guardar entrada
			show_panel_administracion();
		}

		if(isset($_POST['subir'])){ //Guardar entrada
			if(subirCancion()){
				show_msg("Canción subida");
			} else {
				show_msg("Error al subir la canción");
			}
			show_panel_administracion();
		}

		if(isset($_POST['importar'])){ //Guardar entrada
			show_msg("Canción importada");
			show_panel_administracion();
		}

		if(isset($_POST['exportar'])){ //Guardar entrada
			show_msg("Canción exportada");
			show_panel_administracion();
		}

		if(isset($_POST['guardar_anuncios'])){ //Guardar entrada
			show_msg("La configuración de anuncios han sido guardada");
			show_panel_administracion();
		}

		if(isset($_POST['enviar_mail'])){ //Guardar entrada
			show_msg("E-MAIL enviado a los patrocinadores");
			show_panel_administracion();
		}

		if(isset($_POST['restablecer_pass'])){ //Guardar entrada
			show_msg("Contraseña restablecida");
			show_panel_administracion();
		}

		if(isset($_POST['anadir_insulto'])){ //Guardar entrada
			show_msg("Insulto añadido a la base de");
			show_panel_administracion();
		}

		if(isset($_POST['atras'])){ //Guardar entrada
			show_panel_administracion();
		}


	}
}
/*
* Realiza algunas acciones según esté la sesión abierta o no
* E: 
* S: 
* SQL:
*/
function actualizar_sesion() {
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if (isset($_POST['login'])) {

			if (login_ok()) {
				$_SESSION['user'] = $_POST['pass_user'];
			}

		}

	} else {

		if (isset($_GET['cmd'])) {

			if  ($_GET['cmd'] == 'logout') {

				unset($_SESSION);
				session_destroy();
			}
		}
	}
}


?>
