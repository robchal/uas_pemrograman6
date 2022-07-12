<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Book_model;

class Books extends Controller
{
    public function index()
    {
        $model = new Book_model;
        $data["title"] = 'Data Barang';
        $data['books'] = $model->getBook();
        var_dump($data);
        echo view('header_view', $data);
        echo view('welcome_message', $data);
        echo view('footer_view', $data);
    }

}