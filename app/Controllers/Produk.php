<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelProduk;

class Produk extends BaseController
{

    protected $ModelProduk;

    public function __construct() 
        {
            $this->ModelProduk = new ModelProduk();
        }
    
    public function index()
    {
        $data = [
            'judul' => 'Master Data',
            'subjudul' => 'Produk',
            'menu' => 'masterdata',
            'submenu' => 'produk',
            'page' => 'v_produk',
            'produk' => $this->ModelProduk->AllData()
        ];
        return view('v_template', $data);
    }
}
