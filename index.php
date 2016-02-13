<?php
define('ROOT', dirname(__FILE__));

require_once(ROOT . '/core/Router.php');
require_once(ROOT . '/core/Database.php');

session_start();
Router::start();