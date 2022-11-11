<?php
namespace App\Controllers;

use App\Models\Meal;
use App\Models\User;
use App\Controllers\MainController;

class AccountController extends MainController
{
    public function checkConnexion()
    {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $userModel = new User();
                $user = $userModel->findUserByEmail($this->cleanedData($_POST['email']));           
                if ($user) {
                    // verif password
                    if ($this->checkPassword($this->cleanedData($_POST['password']), $user->user_password)) {
                        $_SESSION['user']['id'] = $user->user_id;
                        $_SESSION['user']['fname'] = $user->user_fname;
                        $_SESSION['user']['lname'] = $user->user_lname;
                        header('Location: '.URL.'actions');
                    } else {
                        header('Location: '.URL.'login');
                    }
                } else {
                    header('Location: '.URL.'login');
                }
            } else {
                header('Location: '.URL.'login');
            }
    }

    private function checkPassword(string $password, string $dbPassword)
    {
        return (password_verify($password, $dbPassword)); 
    }

    public function makeChoice()
    {
        $data_page = [
            "description" => "Site restaurant fullsnack, vente à emporter, réservation, commande, page choix, commander ou reserver",
            "title" => "commander ou reserver",
        ];
        $this->render('actions/action.view', $data_page);
    }

    public function checkAccount()
    {
        if (!empty($_POST)) {
            $fname = $this->cleanedData($_POST['fname']);
            $lname = $this->cleanedData($_POST['lname']);
            $address = $this->cleanedData($_POST['address']);
            $code = $this->cleanedData($_POST['code']);
            $city = $this->cleanedData($_POST['city']);
            $phone = $this->cleanedData($_POST['phone']);
            $email = $this->cleanedData($_POST['email']);
            $password = password_hash($this->cleanedData($_POST['password']), PASSWORD_DEFAULT);

            $userModel = new User();
            $newUser = $userModel->addNewUser($fname, $lname, $address, $code, $city, $phone, $email, $password);
            if ($newUser) {
                header('Location: '.URL.'actions');
            } else {
                header('Location: '.URL.'login');
            }
        } else {
            header('Location: '.URL.'create_account');
        }
    }

    public function orderForm()
    {
        $mealsModel = new Meal();
        $meals = $mealsModel->findAll();
        $data_page = [
            "description" => "Site restaurant fullsnack, vente à emporter, page de commande",
            "title" => "FullSnack",
            "meals" => $meals
        ];
        $this->render('actions/order.view', $data_page);
    }

    public static function isConnected()
    {
        if (isset($_SESSION['user'])) {
            return true;
        }
        return false;
    }

    public function logout()
    {
        $_SESSION = [];
        session_unset();
        session_destroy();
        header('Location: '.URL.'home');
    }

    
}