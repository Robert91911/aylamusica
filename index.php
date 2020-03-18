<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once 'config.php';

include_once 'controller/controlador.php';

include_once 'model/modelo.php';

include_once 'view/header.php';

include_once 'view/view.php';

show_content();


?>