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
        $this->render('home.view', ['meals' => $meals]);
    }








    
}