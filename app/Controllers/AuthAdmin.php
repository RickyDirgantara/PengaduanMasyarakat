<?php

namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\Controller;

class AuthAdmin extends Controller
{
    public function index()
    {
        return view('admin/signin');
    }
   
    public function login()
{
    // Jika form disubmit
    if ($this->request->getMethod() === 'post') {
        $email = $this->request->getPost('AlamatEmail');
        $password = $this->request->getPost('KataSandi');

        $userModel = new AuthModel();
        $user = $userModel->where('AlamatEmail', $email)->first();

         if ($user && $password == $user['KataSandi']) {
            session()->set('isLoggedIn', true);
            session()->set('role', $user['Role']);
            session()->set('user_nama', $user['Nama']);

            // Alihkan pengguna ke dashboard
            return redirect()->to('/dashboard');
        } else {
            // Jika tidak valid, tampilkan pesan kesalahan
            return redirect()->to('admin/signin')->with('error', 'Email atau kata sandi salah.');
        }
    }
}

    public function logout()
    {
        // Destroy the user's session
        session()->destroy();

        // Redirect to the home page or any other desired location
        return redirect()->to('/');
    }
    
}
