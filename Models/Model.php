<?php
namespace App\Models;

use PDO;
use App\Core\Db;

class Model extends Db
{
    protected $table;
    private $db;

    public function findAll()
    {
        $this->db = Db::getInstance();
        $sql = 'SELECT * FROM '. $this->table;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

   public function findUserByEmail(string $email)
   {
        $this->db = Db::getInstance();
        $sql = 'SELECT user_id, user_fname, user_lname, user_email, user_password FROM '. $this->table .' WHERE user_email = :email' ;
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
   }

   public function addNewUser(string $fname, string $lname, string $address, string $code, string $city, string $phone, string $email,  string $password)
   {
        $this->db = Db::getInstance();
        $sql = 'INSERT INTO '. $this->table .' (user_fname, user_lname, user_address, user_code, user_city, user_phone,         user_email, user_password) VALUES (:fname, :lname, :address, :code, :city, :phone, :email, :password)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':fname', $fname, PDO::PARAM_STR);
        $stmt->bindValue(':lname', $lname, PDO::PARAM_STR);
        $stmt->bindValue(':address', $address, PDO::PARAM_STR);
        $stmt->bindValue(':code', $code, PDO::PARAM_STR);
        $stmt->bindValue(':city', $city, PDO::PARAM_STR);
        $stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->rowCount();
   }

   public function findMealById($id)
   {
      $this->db = Db::getInstance();
      $sql = 'SELECT meal_id, meal_name, meal_description, meal_picture, meal_price FROM '. $this->table .' WHERE meal_id = :id' ;
      $stmt = $this->db->prepare($sql);
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      $result = $stmt->fetch();
      $stmt->closeCursor();
      return $result;
   }

   public function addOrder($user_id, $price)
   {
      $this->db = Db::getInstance();
      $sql = 'INSERT INTO '. $this->table .' (command_date, user_id, command_price) VALUES (NOW(), :user_id, :price)';
      $stmt = $this->db->prepare($sql);
      $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
      $stmt->bindValue(':price', $price, PDO::PARAM_STR);
      $stmt->execute();
      
      return $this->db->lastInsertId();
   }

   public function addDetailsOrder($idCommand, $order) 
   {


      $this->db = Db::getInstance();
      $sql = 'INSERT INTO '. $this->table .' (command_id, meal_id, list_command_quantity, list_command_unit_price) VALUES (:idCommand, :meal_id, :quantity, :meal_price)';
      $stmt = $this->db->prepare($sql);
      $stmt->bindValue(':idCommand', $idCommand, PDO::PARAM_INT);
      foreach ($order as $ligne) {
          $meal_id = $ligne[0]->meal_id;
          $quantity = $ligne[1];
          $meal_price = $ligne[0]->meal_price;
          $stmt->bindValue(':meal_id', $meal_id, PDO::PARAM_INT);
          $stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
          $stmt->bindValue(':meal_price', $meal_price, PDO::PARAM_STR);
          $stmt->execute();
      }
      $stmt->closeCursor();

      return $stmt->rowCount();

   }













}
