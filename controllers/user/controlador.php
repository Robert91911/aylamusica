<?php


function show_content() {
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {	// GET
		if (!isset($_GET['cmd'])){				// carga inicial de la página

			show_header();

			show_banner();

			//Cuando llame a la seccion central por primera vez tiene que cargar las ultimas algo tipo ultimas canciones, etc. Si lo llama
			//despues tiene que mostrar la cancion con los parrafos
			show_seccionCentral();

			show_ads();
		}
		else {
			switch ($_GET['cmd']) {
				case 'start':
					show_loging();
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
