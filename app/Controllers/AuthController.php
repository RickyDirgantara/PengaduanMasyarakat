<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function register()
    {
        $data = [];
    
        if ($this->request->getMethod() === 'post') {
            // Validasi formulir jika diperlukan
            $validation = \Config\Services::validation();
            $validation->setRules([
                'nama' => 'required',
                'AlamatEmail' => 'required|valid_email|is_unique[Users.AlamatEmail]',
                'KataSandi' => 'required|min_length[6]',
            ]);
    
            if ($validation->withRequest($this->request)->run()) {
                // Jika validasi berhasil, simpan data ke database
                $userModel = new UserModel();
                $userModel->save([
                    'Nama' => $this->request->getPost('nama'),
                    'AlamatEmail' => $this->request->getPost('AlamatEmail'),
                    'KataSandi' => password_hash($this->request->getPost('KataSandi'), PASSWORD_DEFAULT),
                    'StatusAktif' => true,
                ]);
    
                // Redirect ke halaman utama
                return redirect()->to('/')->with('success', 'Registrasi berhasil. Silakan login.');
            } else {
                // Jika validasi gagal, kirim pesan kesalahan
                $data['validation'] = $validation;
            }
        }
    }
    
    public function login()
    {
        $data = [];
    
        if ($this->request->getMethod() === 'post') {
            // Validasi formulir jika diperlukan
            $validation = \Config\Services::validation();
            $validation->setRules([
                'AlamatEmail' => 'required|valid_email',
                'KataSandi' => 'required|min_length[6]',
            ]);
    
            if ($validation->withRequest($this->request)->run()) {
                // Jika validasi berhasil, cek keberadaan pengguna dalam database
                $userModel = new UserModel();
                $user = $userModel->where('AlamatEmail', $this->request->getPost('AlamatEmail'))->first();
    
                if ($user && password_verify($this->request->getPost('KataSandi'), $user['KataSandi'])) {
                    // Jika login berhasil, set session dan redirect
                    session()->set('user_id', $user['UserID']);
                    session()->set('user_nama', $user['Nama']);
                    // Redirect ke halaman utama
                    return redirect()->to('/')->with('success', 'Login berhasil.');
                } else {
                    // Jika login gagal, kirim pesan kesalahan
                    $data['error'] = 'Alamat email atau kata sandi salah.';
                }
            } else {
                // Jika validasi gagal, kirim pesan kesalahan
                $data['validation'] = $validation;
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
