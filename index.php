<?php

use App\Autoloader;
use App\Controllers\HomeController;
use App\Controllers\AccountController;

define('URL', str_replace('index.php', '', (isset($_SERVER['HTTPS'])? 'https':'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

require_once 'Autoloader.php';
Autoloader::register();

$homeController = new HomeController();
$AccountController = new AccountController();

try {

    if (empty($_GET['page'])) {
        $page = 'home';
    } else {
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        $page = $url[0];
    }
    if (empty($url[0])) {
        $homeController->index();
    } else {
        switch ($page) {
            case 'home': $homeController->index();
                break;
            case 'login': $homeController->login();
                break;
            case 'check_connexion': $AccountController->checkConnexion();
                break;
            case 'create_account': $homeController->createAccount();
                break;
            case 'actions': 
                if (!empty($url[1])) {
                        switch ($url[1]) {
                            case 'order': echo 'in progress...';
                                break;
                            case 'booking': echo 'in progress...';
                                break;
                            default: throw new Exception("La page n'existe pas");
                        }
                } else {
                    $AccountController->makeChoice();
                }
                break;
            default: throw new Exception("La page n'existe pas");
        }
    }
}catch (Exception $e) {
    $homeController->error($e->getMessage());
}

