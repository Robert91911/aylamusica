<?php


function show_content() {
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {	// GET
		if (!isset($_GET['cmd'])){				// carga inicial de la página
			cargarWeb();
		}
		else {
			switch ($_GET['cmd']) {
				case 'mostrar_cancion':
					cargarWeb();
					break;
			}

		}
	} else {
		if (isset($_POST['login'])) {

			if (login_ok()) {
					show_chats();
				}
			else {
				show_msg("Fallo en autentificación");
				show_loging();
			}
		}
	}
}

?>
