<?php

namespace App\Controllers;
use App\Models\Student_model;
use App\Models\Book_model;

class Home extends BaseController
{
    public function index()
    {
        echo view('header_view');
        echo view('welcome_message');
        echo view('footer_view');
    }
    public function search()
    {
        $studentSearch = new Student_model;
        $bookSearch = new Book_model;
        $data = $studentSearch->getStudent($this->request->getPost('keyword'));
        if($this->request->getPost('selected') == "nama") {
            $data['students'] = $studentSearch->getStudent($this->request->getPost('keyword'));  
        } else if($this->request->getPost('selected') == "buku") {
            $data['books'] = $bookSearch->getBooks($this->request->getPost('keyword'));
        }
        // var_dump($data['students'][0]);
        echo view('header_view', $data);
        echo view('welcome_message', $data);
        echo view('footer_view', $data);
    }
}
