<?php

namespace App\Models;

use CodeIgniter\Model;

class Borrow_model extends Model
{
    protected $table = "borrows";
    public function getBorrow($keyword = false)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);

        var_dump($keyword);
        if(!$keyword){
            return null;
        }

        $builder->like('name', $keyword);
        return $builder->get()->getResultArray();
    
    }

    
}