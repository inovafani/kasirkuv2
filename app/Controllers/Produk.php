<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelProduk;
use App\Models\ModelKategori;
use App\Models\ModelSatuan;

class Produk extends BaseController
{

    protected $ModelProduk;
    protected $ModelKategori;
    protected $ModelSatuan;

    public function __construct() 
        {
            $this->ModelProduk = new ModelProduk();
            $this->ModelKategori = new ModelKategori();
            $this->ModelSatuan = new ModelSatuan();
        }
    
    public function index()
    {
        $data = [
            'judul' => 'Master Data',
            'subjudul' => 'Produk',
            'menu' => 'masterdata',
            'submenu' => 'produk',
            'page' => 'v_produk',
            'produk' => $this->ModelProduk->AllData(),
            'kategori' => $this->ModelKategori->AllData(),
            'satuan' => $this->ModelSatuan->AllData()
        ];
        return view('v_template', $data);
    }

    public function TambahData()
    {

        if ($this->validate([
                'kode_produk' => [
                'label' => 'Kode Produk / Barcode',
                'rules' => 'is_unique[tbl_produk.kode_produk]',
                'errors' => [
                    'is_unique' => '{field} sudah ada, masukkan kode lain',
                ]
            ],
                'id_satuan' => [
                'label' => 'Satuan',
                'rules' => 'required',
                'errors' => [ 
                    'required' => '{field} belum dipilih',
                ]
            ],
                'id_kategori' => [
                'label' => 'Kategori',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} belum dipilih',
                ]
            ]
        ])){
            $hargaBeli = str_replace(",", "", $this->request->getPost('harga_beli'));
            $hargaJual = str_replace(",", "", $this->request->getPost('harga_jual'));
            $data = [
                'kode_produk' => $this->request->getPost('kode_produk'),
                'nama_produk' => $this->request->getPost('nama_produk'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'id_satuan' => $this->request->getPost('id_satuan'),
                'harga_beli' => $hargaBeli,
                'harga_jual' => $hargaJual,
                'stok' => $this->request->getPost('stok')
            ];
            $this->ModelProduk->TambahData($data);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');
            return redirect()->to(base_url('Produk'));
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Produk'))->withInput('validation');
        }
    }

    public function UpdateData($id_produk)
    {

        if ($this->validate([
                'id_satuan' => [
                'label' => 'Satuan',
                'rules' => 'required',
                'errors' => [ 
                    'required' => '{field} belum dipilih',
                ]
            ],
                'id_kategori' => [
                'label' => 'Kategori',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} belum dipilih',
                ]
            ]
        ])){
            $hargaBeli = str_replace(",", "", $this->request->getPost('harga_beli'));
            $hargaJual = str_replace(",", "", $this->request->getPost('harga_jual'));
            $data = [
                'id_produk' => $id_produk,
                'nama_produk' => $this->request->getPost('nama_produk'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'id_satuan' => $this->request->getPost('id_satuan'),
                'harga_beli' => $hargaBeli,
                'harga_jual' => $hargaJual,
                'stok' => $this->request->getPost('stok')
            ];
            $this->ModelProduk->UpdateData($data);
            session()->setFlashdata('pesan', 'Data berhasil diupdate!');
            return redirect()->to(base_url('Produk'));
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Produk'))->withInput('validation');
        }
    }

    public function DeleteData($id_produk)
    {
        $session = \Config\Services::session();
        $data = ['id_produk' => $id_produk];
        $this->ModelProduk->DeleteData($data);
        $session->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('Produk');
    }
}
