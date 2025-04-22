<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelKategori;

class Kategori extends BaseController
{

    protected $ModelKategori;

    public function __construct() 
        {
            $this->ModelKategori = new ModelKategori();
        }

    public function index()
    {
        $data = [
            'judul' => 'Master Data',
            'subjudul' => 'Kategori',
            'menu' => 'masterdata',
            'submenu' => 'kategori',
            'page' => 'v_kategori',
            'kategori' => $this->ModelKategori->AllData()
        ];
        return view('v_template', $data);
    }

    public function TambahData()
    {
        $session = \Config\Services::session();
        $data = ['nama_kategori' => $this->request->getPost('nama_kategori')];
        $this->ModelKategori->TambahData($data);
        $session->setFlashdata('pesan', 'Data berhasil ditambahkan!');
        return redirect()->to('kategori');
    }


    public function UpdateData($id_kategori)
    {
        $session = \Config\Services::session();
        $data = ['id_kategori' => $id_kategori,
        'nama_kategori' => $this->request->getPost('nama_kategori')
        ];
        $this->ModelKategori->UpdateData($data);
        $session->setFlashdata('pesan', 'Data berhasil diupdate!');
        return redirect()->to('kategori');
    }

    public function DeleteData($id_kategori)
    {
        $session = \Config\Services::session();
        $data = ['id_kategori' => $id_kategori];
        $this->ModelKategori->DeleteData($data);
        $session->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('kategori');
    }
}
