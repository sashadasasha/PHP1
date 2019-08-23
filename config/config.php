<?php
define("TEMPLATES_DIR", "../views/");
define("LAYOUTS_DIR", 'layout/');

/* DB config */
define('HOST', 'localhost:3308');
define('USER', 'root');
define('PASS', '');

include_once "../engine/db.php";
include_once "../engine/functions.php";
include_once "../engine/log.php";
