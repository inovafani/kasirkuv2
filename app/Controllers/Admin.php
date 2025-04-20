<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'subjudul' => '',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'v_admin'
        ];
        return view('v_template', $data);
    }

    public function Settings()
    {
        $data = [
            'judul' => 'Settings',
            'subjudul' => '',
            'menu' => 'settings',
            'submenu' => '',
            'page' => 'v_settings'
        ];
        return view('v_template', $data);
    }
}
