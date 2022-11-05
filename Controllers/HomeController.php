<?php
namespace App\Controllers;

use App\Models\Meal;
use App\Controllers\MainController;

class HomeController extends MainController
{
    public function index()
    {
        $mealsModel = new Meal();
        $meals = $mealsModel->findAll();
        $data_page = [
            "description" => "Site restaurant fullsnack, vente à emporter, réservation, commande",
            "title" => "FullSnack",
            "meals" => $meals,
        ];
        $this->render('home.view', $data_page);
    }

    public function login()
    {
        $data_page = [
            "description" => "Site restaurant fullsnack, vente à emporter, réservation, commande, page login",
            "title" => "FullSnack",
        ];
        $this->render('account/login.view', $data_page);
    }

    public function createAccount()
    {
        $data_page = [
            "description" => "Site restaurant fullsnack, vente à emporter, réservation, commande, page login",
            "title" => "création du compte client",
        ];
        $this->render('account/create_account.view');
    }

    public function error($msg)
    {
        parent::errorPage($msg);
    }
    








    
}