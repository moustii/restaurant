<?php
session_start();

use App\Autoloader;
use App\Controllers\HomeController;
use App\Controllers\OrderController;
use App\Controllers\AccountController;
use App\Controllers\BookingController;

define('URL', str_replace('index.php', '', (isset($_SERVER['HTTPS'])? 'https':'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

// date_default_timezone_set('Europe/Paris');

require_once 'Autoloader.php';
Autoloader::register();

$homeController = new HomeController();
$AccountController = new AccountController();
$OrderController = new OrderController();
$BookingController = new BookingController();

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
            case 'login': 
                if (!AccountController::isConnected()) {
                    $homeController->login();
                } else {
                    $AccountController->makeChoice();
                }
                break;
            case 'check_connexion': $AccountController->checkConnexion();
                break;
            case 'create_account': $homeController->createAccount();
                break;
            case 'check_account': $AccountController->checkAccount(); 
                break;
            case 'actions': 
                if (AccountController::isConnected()) {

                    if (!empty($url[1])) {
                        switch ($url[1]) {
                            case 'order': 
                                if (!empty($url[2]) && !empty($url[3])) {
                                    switch ($url[2]) {
                                        case 'ajax_actions':
                                            if (!empty($url[4])) {
                                                $order = (string)$url[3];
                                                $totalPrice = number_format($url[4], 2);
                                                $OrderController->getJsonMeal($order, $totalPrice);
                                            } else {
                                                $meal_id = (int)$url[3];
                                                $OrderController->getJsonMeal($meal_id, null);
                                            }
                                            break;
                                        default: throw new Exception("La page n'existe pas");
                                    }
                                } else {
                                    $AccountController->orderForm();
                                }
                                break;
                            case 'booking': 
                                if (!empty($url[2])) {
                                    $BookingController->sendBooking();
                                } else {
                                    $AccountController->bookingForm();
                                }
                                break;
                            default: throw new Exception("La page n'existe pas");
                        }
                    } else {
                        $AccountController->makeChoice();
                    }
                } else {
                    header('Location: '.URL.'login');
                }
                break;
            case 'logout': $AccountController->logout();
                break;

            default: throw new Exception("La page n'existe pas");
        }
    }
}catch (Exception $e) {
    $homeController->error($e->getMessage());
}
