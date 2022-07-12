<?php

// namespace App\Models;

// use CodeIgniter\Model;

// class Level_model extends Model
// {
//     protected $table = "level";
//     public function getLevel($id = false)
//     {
//         if ($id === false) {
//             return $this->findAll();
//         } else {
//             return $this->getWhere(['id_level' => $id]);
//         }
//     }

//     public function getLevelName($id)
//     {
//         $db = \Config\Database::connect();
//         $builder = $db->table('level');
//         $level = $builder->select('level')
//             ->where('id_level', $id)
//             ->get()->getResult();
//         return $level[0]->level;
//     }

//     public function saveLevel($data)
//     {
//         $builder = $this->db->table($this->table);
//         return $builder->insert($data);
//     }
// }
