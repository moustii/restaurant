<?php 
namespace App\Models;

class User extends Model 
{
    private $user_id;
    private $user_fname;
    private $user_lname;
    private $user_address;
    private $user_code;
    private $user_city;
    private $user_phone;
    private $user_email;
    private $user_password;

    public function __construct()
    {
        $this->table = 'user';
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
     * Get the value of user_fname
     */ 
    public function getUser_fname(): string
    {
        return $this->user_fname;
    }

    /**
     * Set the value of user_fname
     *
     * @return  self
     */ 
    public function setUser_fname($user_fname): self
    {
        $this->user_fname = $user_fname;

        return $this;
    }

    /**
     * Get the value of user_lname
     */ 
    public function getUser_lname(): string
    {
        return $this->user_lname;
    }

    /**
     * Set the value of user_lname
     *
     * @return  self
     */ 
    public function setUser_lname($user_lname): self
    {
        $this->user_lname = $user_lname;

        return $this;
    }

    /**
     * Get the value of user_address
     */ 
    public function getUser_address(): string
    {
        return $this->user_address;
    }

    /**
     * Set the value of user_address
     *
     * @return  self
     */ 
    public function setUser_address($user_address): self
    {
        $this->user_address = $user_address;

        return $this;
    }

    /**
     * Get the value of user_code
     */ 
    public function getUser_code()
    {
        return $this->user_code;
    }

    /**
     * Set the value of user_code
     *
     * @return  self
     */ 
    public function setUser_code($user_code): self
    {
        $this->user_code = $user_code;

        return $this;
    }

    /**
     * Get the value of user_city
     */ 
    public function getUser_city(): string
    {
        return $this->user_city;
    }

    /**
     * Set the value of user_city
     *
     * @return  self
     */ 
    public function setUser_city($user_city): self
    {
        $this->user_city = $user_city;

        return $this;
    }

    /**
     * Get the value of user_phone
     */ 
    public function getUser_phone()
    {
        return $this->user_phone;
    }

    /**
     * Set the value of user_phone
     *
     * @return  self
     */ 
    public function setUser_phone($user_phone): self
    {
        $this->user_phone = $user_phone;

        return $this;
    }

    /**
     * Get the value of user_email
     */ 
    public function getUser_email(): string
    {
        return $this->user_email;
    }

    /**
     * Set the value of user_email
     *
     * @return  self
     */ 
    public function setUser_email($user_email): self
    {
        $this->user_email = $user_email;

        return $this;
    }

    /**
     * Get the value of user_password
     */ 
    public function getUser_password(): string
    {
        return $this->user_password;
    }

    /**
     * Set the value of user_password
     *
     * @return  self
     */ 
    public function setUser_password($user_password): self
    {
        $this->user_password = $user_password;

        return $this;
    }
}