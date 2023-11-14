<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ComplaintModel;

class Dashboard extends BaseController
{
    public function index()
    {

        // Logika bisnis untuk mengambil data dari model
        $userModel = new UserModel();
        $complaintModel = new ComplaintModel();

        $data['users'] = $userModel->findAll();
        $data['complaints'] = $complaintModel->findAll();

        // Menampilkan tampilan dashboard
        return view('admin/dashboard', $data);
    }
}
