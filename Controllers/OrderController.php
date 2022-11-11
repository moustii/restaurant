<?php
namespace App\Controllers;

use App\Models\Meal;
use App\Models\User;
use App\Models\Command;
use App\Controllers\MainController;
use App\Models\ListCommand;

class OrderController extends MainController
{

    public function getJsonMeal(int|string $data, float|null $price)
    {
        if (!empty($data) && is_int($data)) {
            $mealsModel = new Meal();
            $meal = $mealsModel->findMealById($this->cleanedData($data));
            echo json_encode($meal, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        } else if (!empty($price)) {
            $order = json_decode($data);
            $totalPrice = number_format($price, 2);

            $command = new Command();
            $idCommand = $command->addOrder($_SESSION['user']['id'], $totalPrice);

            $listCommand = new ListCommand();
            $listCommand->addDetailsOrder($idCommand, $order);

            $data_page = [
                'alert' => 'success',
                'mess' => 'votre commande a bien été validé'
            ];
            $this->render('actions/order.view', $data_page);


        } else {
            header('Location: '.URL.'actions/order');
        }
    }
    
}