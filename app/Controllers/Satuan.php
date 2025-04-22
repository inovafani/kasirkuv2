<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelSatuan;

class Satuan extends BaseController
{
    protected $ModelSatuan;

    public function __construct() 
        {
            $this->ModelSatuan = new ModelSatuan();
        }
    
    public function index()
    {
        $data = [
            'judul' => 'Master Data',
            'subjudul' => 'Satuan',
            'menu' => 'masterdata',
            'submenu' => 'satuan',
            'page' => 'v_satuan',
            'satuan' => $this->ModelSatuan->AllData()
        ];
        return view('v_template', $data);
    }

    public function TambahData()
    {
        $session = \Config\Services::session();
        $data = ['nama_satuan' => $this->request->getPost('nama_satuan')];
        $this->ModelSatuan->TambahData($data);
        $session->setFlashdata('pesan', 'Data berhasil ditambahkan!');
        return redirect()->to('Satuan');
    }


    public function UpdateData($id_satuan)
    {
        $session = \Config\Services::session();
        $data = ['id_satuan' => $id_satuan,
        'nama_satuan' => $this->request->getPost('nama_satuan')
        ];
        $this->ModelSatuan->UpdateData($data);
        $session->setFlashdata('pesan', 'Data berhasil diupdate!');
        return redirect()->to('Satuan');
    }

    public function DeleteData($id_satuan)
    {
        $session = \Config\Services::session();
        $data = ['id_satuan' => $id_satuan];
        $this->ModelSatuan->DeleteData($data);
        $session->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('Satuan');
    }
}
