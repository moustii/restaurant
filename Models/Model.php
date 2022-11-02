<?php
namespace App\Models;

use App\Core\Db;

class Model extends Db
{
    protected $table;
    private $db;

    public function findAll()
    {
        $this->db = Db::getInstance();
        $sql = 'SELECT * FROM meal';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

















}
