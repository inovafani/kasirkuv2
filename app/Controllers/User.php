<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'User',
            'subjudul' => 'User',
            'menu' => 'masterdata',
            'submenu' => 'user',
            'page' => 'v_user'
        ];
        return view('v_template', $data);
    }
}
