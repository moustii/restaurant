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
        $sql = 'SELECT user_email, user_password FROM '. $this->table .' WHERE user_email = :email' ;
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















}
