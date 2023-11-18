<?php

namespace App\Controllers;
use App\Models\ComplaintModel;
class Laporan extends BaseController
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

        $data['activeLink'] = $activeLink;
        $data['isLoggedIn'] = session()->get('user_id') ? true : false;

        return view('laporan', $data);
    }

    public function create()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'JudulPengaduan' => 'required',
                'KategoriPengaduan' => 'required',
                'DeskripsiPengaduan' => 'required',
            ]);

            if ($validation->withRequest($this->request)->run()) {
                $complaintModel = new ComplaintModel();
                $complaintModel->save([
                    'JudulPengaduan' => $this->request->getPost('JudulPengaduan'),
                    'DeskripsiPengaduan' => $this->request->getPost('DeskripsiPengaduan'),
                    'KategoriPengaduan' => $this->request->getPost('KategoriPengaduan'),
                    'TanggalPengaduan' => date('Y-m-d'),
                    'StatusPengaduan' => 'Dalam Proses', 
                    'PrioritasPengaduan' => 'Sedang', 
                    'UserID' => session()->get('user_id'),
                ]);

                return redirect()->to('/')->with('success', 'Laporan Dikirim!.');
            } else {
                $data['validation'] = $validation;
            }
        }
    }
}
