<?php

namespace App\Controllers;

class Panduan extends BaseController
{
    public function index(): string
    {
        $data = [];

        // Dapatkan instance objek URI dari helper URL
        $uri = service('uri');

        // Tentukan ID tautan navbar yang sesuai dengan halaman saat ini
        $activeLink = '';
        switch ($uri->getSegment(1)) {
            case 'panduan':
                $activeLink = 'panduan';
                break;
            case 'laporan':
                $activeLink = 'laporan';
                break;
            case '/':
                $activeLink = 'index';
                break;
        }

        // Tambahkan informasi sesi pengguna
        $data['activeLink'] = $activeLink;
        $data['isLoggedIn'] = session()->get('user_id') ? true : false;

        return view('panduan', $data);
    }
}
