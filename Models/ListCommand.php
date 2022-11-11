<?php
namespace App\Models;

class ListCommand extends Model
{
    private $command_id;
    private $meal_id;
    private $list_command_quantity;
    private $list_command_unit_price;

    public function __construct()
    {
        $this->table = 'list_command';
    }

    /**
     * Get the value of command_id
     */ 
    public function getCommand_id()
    {
        return $this->command_id;
    }

    /**
     * Set the value of command_id
     *
     * @return  self
     */ 
    public function setCommand_id($command_id): self
    {
        $this->command_id = $command_id;

        return $this;
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
     * Get the value of list_command_quantity
     */ 
    public function getList_command_quantity()
    {
        return $this->list_command_quantity;
    }

    /**
     * Set the value of list_command_quantity
     *
     * @return  self
     */ 
    public function setList_command_quantity($list_command_quantity): self
    {
        $this->list_command_quantity = $list_command_quantity;

        return $this;
    }

    /**
     * Get the value of list_command_unit_price
     */ 
    public function getList_command_unit_price()
    {
        return $this->list_command_unit_price;
    }

    /**
     * Set the value of list_command_unit_price
     *
     * @return  self
     */ 
    public function setList_command_unit_price($list_command_unit_price): self
    {
        $this->list_command_unit_price = $list_command_unit_price;

        return $this;
    }
}