<?php

// namespace App\Controllers;

// use App\Models\Level_model;
// use CodeIgniter\Controller;
// use App\Models\User_model;

// class User extends Controller
// {
//     public function index()
//     {
//         $model = new User_model;
//         $modelLevel = new Level_model;
//         $data["title"] = 'Data Users';
//         $data['getUser'] = $model->getUser();
//         for ($i = 0; $i < count($data['getUser']); $i++) {
//             $data['getUser'][$i]['level'] = $modelLevel->getLevelName($data['getUser'][$i]['id_level']);
//             // echo 'test';
//             // dd($data['getUser'][0]['id_level']);
//         }
//         echo view('header_view', $data);
//         echo view('user_view', $data);
//         echo view('footer_view', $data);
//     }

//     public function tambah()
//     {
//         $model = new Level_model;
//         $data['getLevel'] = $model->getLevel();
//         echo view('header_view', $data);
//         echo view('userTambah_view', $data);
//         echo view('footer_view', $data);
//     }

//     public function add()
//     {
//         $model = new User_model;
//         $data = array(
//             'nama' => $this->request->getPost('nama'),
//             'id_level'         => $this->request->getPost('id_level'),
//         );
//         $model->saveUser($data);
//         echo '<script>
//                 alert("Sukses Tambah Data Barang");
//                 window.location="' . base_url('user') . '"
//             </script>';
//     }
// }
