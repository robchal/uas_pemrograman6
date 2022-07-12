<?php

// namespace App\Controllers;

// use CodeIgniter\Controller;
// use App\Models\Level_model;

// class Level extends Controller
// {
//     public function index()
//     {
//         $model = new Level_model;
//         $data["title"] = 'Data Level';
//         $data['getUser'] = $model->getLevel();
//         echo view('header_view', $data);
//         echo view('level_view', $data);
//         echo view('footer_view', $data);
//     }

//     public function tambah()
//     {
//         $data['title']     = 'Tambah Data Level';
//         echo view('header_view', $data);
//         echo view('levelTambah_view', $data);
//         echo view('footer_view', $data);
//     }

//     public function add()
//     {
//         $model = new Level_model;
//         $data = array(
//             'level'         => $this->request->getPost('level'),
//             'id_level'         => $this->request->getPost('id_level'),
//         );
//         $model->saveLevel($data);
//         echo '<script>
//                 alert("Sukses Tambah Data Level");
//                 window.location="' . base_url('Level') . '"
//             </script>';
//     }
// }
