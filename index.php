<?php

use App\Autoloader;
use App\Controllers\HomeController;

define('URL', str_replace('index.php', '', (isset($_SERVER['HTTPS'])? 'https':'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

require_once 'Autoloader.php';
Autoloader::register();

$homeController = new HomeController();

if (empty($_GET['page'])) {
    $page = 'home';
} else {
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
    $page = $url[0];
}

if (empty($url[0])) {
    $homeController->index();
}



