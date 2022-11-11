<?php
namespace App\Models;

class Command extends Model
{
    private $command_id;
    private $user_id;
    private $command_date;
    private $command_price;

    public function __construct()
    {
        $this->table = 'command';
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
     * Get the value of command_date
     */ 
    public function getCommand_date()
    {
        return $this->command_date;
    }

    /**
     * Set the value of command_date
     *
     * @return  self
     */ 
    public function setCommand_date($command_date): self
    {
        $this->command_date = $command_date;

        return $this;
    }

    /**
     * Get the value of command_price
     */ 
    public function getCommand_price()
    {
        return $this->command_price;
    }

    /**
     * Set the value of command_price
     *
     * @return  self
     */ 
    public function setCommand_price($command_price): self
    {
        $this->command_price = $command_price;

        return $this;
    }
}