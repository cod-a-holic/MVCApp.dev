<?php
define('ROOT', dirname(__FILE__));

require_once(ROOT . '/core/Router.php');

session_start();
Router::start();