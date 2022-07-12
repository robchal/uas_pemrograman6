<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Student_model;

class Student extends Controller
{
    public function index()
    {
        $model = new Student_model;
        $data["title"] = 'Data Barang';
        $data['students'] = $model->getStudent();   
        echo view('header_view', $data);
        echo view('welcome_message', $data);
        echo view('footer_view', $data);
    }

}
