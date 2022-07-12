<?php

namespace App\Models;

use CodeIgniter\Model;

class Book_model extends Model
{
    protected $table = "books";

    public function getBooks($keyword = false)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        if(!$keyword){
            return null;
        }

        $builder->like('book_name', $keyword);
        $data = $builder->get()->getResultArray();
        if(!$data) {
            return [];
        }
        $data = $this->getBorrows($data);
        return $data;
    
    }

    public function getBorrows($id)
    {
        // var_dump($id[0]['studentId']);
        // die();
        $db = \Config\Database::connect();
        $builder = $db->table('books');
        // $builder->select('student');
        // var_dump($builder);/
        return $builder->join('borrows', 'borrows.bookId = ' . $id[0]['bookId'])
        ->join('students', 'borrows.studentId = ' . 'students.studentId')
        ->join('authors', 'books.authorId = ' . 'authors.authorId')
        ->join('types', 'books.typeId = ' . 'types.typeId')
        ->getWhere(['books.book_name' => $id[0]['book_name']])
        ->getResultArray();
    }

    
}