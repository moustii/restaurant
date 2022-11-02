<?php

namespace App\Models;

class Meal extends Model
{
    private $mealId;
    private $mealName;
    private $mealDescription;
    private $mealPicture;
    private $mealPrice;

    public function __construct()
    {
        $this->table = 'meal';
    }

    /**
     * Get the value of mealId
     */ 
    public function getMealId()
    {
        return $this->mealId;
    }

    /**
     * Set the value of mealId
     *
     * @return  self
     */ 
    public function setMealId($mealId): self
    {
        $this->mealId = $mealId;

        return $this;
    }

    /**
     * Get the value of mealName
     */ 
    public function getMealName(): string
    {
        return $this->mealName;
    }

    /**
     * Set the value of mealName
     *
     * @return  self
     */ 
    public function setMealName($mealName): self
    {
        $this->mealName = $mealName;

        return $this;
    }

    /**
     * Get the value of mealDescription
     */ 
    public function getMealDescription(): string
    {
        return $this->mealDescription;
    }

    /**
     * Set the value of mealDescription
     *
     * @return  self
     */ 
    public function setMealDescription($mealDescription): self
    {
        $this->mealDescription = $mealDescription;

        return $this;
    }

    /**
     * Get the value of mealPicture
     */ 
    public function getMealPicture(): string
    {
        return $this->mealPicture;
    }

    /**
     * Set the value of mealPicture
     *
     * @return  self
     */ 
    public function setMealPicture($mealPicture): self
    {
        $this->mealPicture = $mealPicture;

        return $this;
    }

    /**
     * Get the value of mealPrice
     */ 
    public function getMealPrice()
    {
        return $this->mealPrice;
    }

    /**
     * Set the value of mealPrice
     *
     * @return  self
     */ 
    public function setMealPrice($mealPrice): self
    {
        $this->mealPrice = $mealPrice;

        return $this;
    }
}