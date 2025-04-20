<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Produk extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Master Data',
            'subjudul' => 'Produk',
            'menu' => 'masterdata',
            'submenu' => 'produk',
            'page' => 'v_produk'
        ];
        return view('v_template', $data);
    }
}
