<?php
namespace App\Controllers;

use App\Models\Meal;
use App\Models\User;
use App\Models\Command;
use App\Controllers\MainController;
use App\Models\Booking;
use App\Models\ListCommand;

class BookingController extends MainController
{

    public function sendBooking()
    {
        if (!empty($_POST)) {
            $date = MainController::cleanedData($_POST['date']);
            $hour = MainController::cleanedData($_POST['hour']);
            $minutes = MainController::cleanedData($_POST['minutes']);
            $dateTime = date($date. ' '.$hour.':'.$minutes);
            $guests = $_POST['guests'];
            $booking = new Booking();
            if ($booking->insertBooking($_SESSION['user']['id'], $dateTime, $guests)) {
                $data_page = [
                    "description" => "Site restaurant fullsnack, vente à emporter, réservation",
                    "title" => "FullSnack",
                    "alert" => 'réservation en attente de validation',
                    "color" => 'success'
                ];
                $this->render('actions/booking.view', $data_page);
            } else {
                $data_page = [
                    "description" => "Site restaurant fullsnack, vente à emporter, réservation",
                    "title" => "FullSnack",
                    "alert" => 'réservation impossible, veuillez nous contacter',
                    "color" => 'danger'
                ];
                $this->render('actions/booking.view', $data_page);
            }
        } else {
            header('Location: '.URL.'actions/booking');
        }
    }
    
}