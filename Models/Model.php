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
















}
