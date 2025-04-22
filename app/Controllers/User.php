<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelUser;

class User extends BaseController
{

    protected $ModelUser;

    public function __construct() 
        {
            $this->ModelUser = new ModelUser();
        }

    public function index()
    {
        $data = [
            'judul' => 'User',
            'subjudul' => 'User',
            'menu' => 'masterdata',
            'submenu' => 'user',
            'page' => 'v_user',
            'user' => $this->ModelUser->AllData()
        ];
        return view('v_template', $data);
    }

    public function TambahData()
    {
        $session = \Config\Services::session();
        $data = ['nama_user' => $this->request->getPost('nama_user'),
                 'email' => $this->request->getPost('email'),
                 'password' => sha1($this->request->getPost('password')),
                 'level' => $this->request->getPost('level')
                ];
        $this->ModelUser->TambahData($data);
        $session->setFlashdata('pesan', 'Data berhasil ditambahkan!');
        return redirect()->to('User');
    }

    public function UpdateData($id_user)
    {
        $session = \Config\Services::session();
        $data = ['id_user' => $id_user,
                 'nama_user' => $this->request->getPost('nama_user'),
                 'email' => $this->request->getPost('email'),
                 'level' => $this->request->getPost('level')
                ];
        $this->ModelUser->UpdateData($data);
        $session->setFlashdata('pesan', 'Data berhasil diupdate!');
        return redirect()->to('User');
    }

    public function DeleteData($id_user)
    {
        $session = \Config\Services::session();
        $data = ['id_user' => $id_user];
        $this->ModelUser->DeleteData($data);
        $session->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('User');
    }
}
