<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }
    public function create()
    {
    //     $kelas = [
    //     [
    //         'id' => 1,
    //         'nama_kelas' => 'A'
    //     ],
    //     [
    //         'id' => 2,
    //         'nama_kelas' => 'B'
    //     ],
    //     [
    //         'id' => 3,
    //         'nama_kelas' => 'C'
    //     ],
    //     [
    //         'id' => 4,
    //         'nama_kelas' => 'D'
    //     ],
    // ];
    

    $kelas = $this->kelasModel->getKelas();

    $data = [
        'title' => 'create user',
        'kelas' => $kelas,
        'validation' => \Config\Services::validation()

    ];

        return view('create_user', $data);
    }
    public function store()
    {
                if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.'
                ]
            ],
            'npm' => [
                'rules' => 'required|is_unique[user.npm]',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.',
                    'is_unique' => '{field} mahasiswa sudah terdaftar.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/user/create'))->withInput()->with('validation', $validation);
        }

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];
        return view('profile', $data);
    }
}
