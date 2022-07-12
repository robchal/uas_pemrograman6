<?php

namespace App\Models;

use CodeIgniter\Model;

class Student_model extends Model
{
    protected $table = "students";

    public function getStudent($keyword = false)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        if(!$keyword){
            return null;
        }

        $builder->like('name', $keyword);
        $data = $builder->get()->getResultArray();
        if(!$data) {
            return $this->getAll();
        }
        $data = $this->getBorrows($data);
        return $data;
    
    }

    public function getBorrows($id)
    {
        // var_dump($id[0]['studentId']);
        // die();
        $db = \Config\Database::connect();
        $builder = $db->table('students');
        // $builder->select('student');
        // var_dump($builder);/
        return $builder->join('borrows', 'borrows.studentId = ' . $id[0]['studentId'])
        ->join('books', 'borrows.bookId = ' . 'books.bookId')
        ->join('authors', 'books.authorId = ' . 'authors.authorId')
        ->join('types', 'books.typeId = ' . 'types.typeId')
        ->getWhere(['students.studentId' => $id[0]['studentId']])->getResultArray();

    }

    public function getAll() {
        $db = \Config\Database::connect();
        $builder = $db->table('students');
        // $builder->select('student');
        // var_dump($builder);/
        $builder->join('borrows', 'borrows.studentId = students.studentId')
        ->join('books', 'borrows.bookId = ' . 'books.bookId')
        ->join('types', 'books.typeId = ' . 'types.typeId')
        ->join('authors', 'books.authorId = ' . 'authors.authorId')->orderBy('students.studentId', 'ASC');
        return $builder->get()->getResultArray();
    }

    
}