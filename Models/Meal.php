<?php
namespace App\Models;

class Meal extends Model
{
    private $meal_id;
    private $meal_name;
    private $meal_description;
    private $meal_picture;
    private $meal_price;

    public function __construct()
    {
        $this->table = 'meal';
    }

    /**
     * Get the value of meal_id
     */ 
    public function getMeal_id()
    {
        return $this->meal_id;
    }

    /**
     * Set the value of meal_id
     *
     * @return  self
     */ 
    public function setMeal_id($meal_id): self
    {
        $this->meal_id = $meal_id;

        return $this;
    }

    /**
     * Get the value of meal_name
     */ 
    public function getMeal_name(): string
    {
        return $this->meal_name;
    }

    /**
     * Set the value of meal_name
     *
     * @return  self
     */ 
    public function setMeal_name($meal_name): self
    {
        $this->meal_name = $meal_name;

        return $this;
    }

    /**
     * Get the value of meal_picture
     */ 
    public function getMeal_picture(): string
    {
        return $this->meal_picture;
    }

    /**
     * Set the value of meal_picture
     *
     * @return  self
     */ 
    public function setMeal_picture($meal_picture): self
    {
        $this->meal_picture = $meal_picture;

        return $this;
    }

    /**
     * Get the value of meal_description
     */ 
    public function getMeal_description(): string
    {
        return $this->meal_description;
    }

    /**
     * Set the value of meal_description
     *
     * @return  self
     */ 
    public function setMeal_description($meal_description): self
    {
        $this->meal_description = $meal_description;

        return $this;
    }

    /**
     * Get the value of meal_price
     */ 
    public function getMeal_price()
    {
        return $this->meal_price;
    }

    /**
     * Set the value of meal_price
     *
     * @return  self
     */ 
    public function setMeal_price($meal_price): self
    {
        $this->meal_price = $meal_price;

        return $this;
    }
}