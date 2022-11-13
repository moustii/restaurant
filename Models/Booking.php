<?php
namespace App\Models;

class Booking extends Model
{
    private $booking_id;
    private $user_id;
    private $booking_date;
    private $booking_guests;

    public function __construct()
    {
        $this->table = 'booking';
    }

    /**
     * Get the value of booking_id
     */ 
    public function getBooking_id()
    {
        return $this->booking_id;
    }

    /**
     * Set the value of booking_id
     *
     * @return  self
     */ 
    public function setBooking_id($booking_id): self
    {
        $this->booking_id = $booking_id;

        return $this;
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of booking_date
     */ 
    public function getBooking_date()
    {
        return $this->booking_date;
    }

    /**
     * Set the value of booking_date
     *
     * @return  self
     */ 
    public function setBooking_date($booking_date): self
    {
        $this->booking_date = $booking_date;

        return $this;
    }

    /**
     * Get the value of booking_guests
     */ 
    public function getBooking_guests()
    {
        return $this->booking_guests;
    }

    /**
     * Set the value of booking_guests
     *
     * @return  self
     */ 
    public function setBooking_guests($booking_guests): self
    {
        $this->booking_guests = $booking_guests;

        return $this;
    }
}