<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

include_once 'models/users/modelo.php';

include_once 'views/users/header.php';

include_once 'views/users/view.php';

show_header();

show_banner();

show_content();

show_ads();


?>