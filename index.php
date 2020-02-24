<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once 'config.php';

include_once 'controllers/user/controlador.php';

include_once 'models/users/modelo.php';

include_once 'views/users/header.php';

include_once 'views/users/view.php';

show_content();


?>