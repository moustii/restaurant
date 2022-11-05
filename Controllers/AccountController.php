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
                $user = $userModel->findUserByEmail(htmlentities($_POST['email']));           
                if ($user) {
                    // verif password
                    if ($this->checkPassword(htmlentities($_POST['password']), $user->user_password)) {
                        // header('Location: '.URL.'connected/choice');
                        echo 'ok';
                    } else {
                        header('Location: '.URL.'login');
                    }
                } else {
                }
            } else {
                header('Location: '.URL.'login');
            }
    }

    private function checkPassword(string $password, string $dbPassword)
    {
        return (password_verify($password, $dbPassword)); 
    }
    

















    
}