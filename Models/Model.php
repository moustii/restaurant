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
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query;
    }

















}
