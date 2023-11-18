<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{

    
    public function login()
    {
        $data = [];
    
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'AlamatEmail' => 'required|valid_email',
                'KataSandi' => 'required|min_length[6]',
            ]);
    
            if ($validation->withRequest($this->request)->run()) {
                $userModel = new UserModel();
                $user = $userModel->where('AlamatEmail', $this->request->getPost('AlamatEmail'))->first();
    
                if ($user && password_verify($this->request->getPost('KataSandi'), $user['KataSandi'])) {

                    session()->set('user_id', $user['UserID']);
                    session()->set('user_nama', $user['Nama']);
          
                    return redirect()->to('/')->with('success', 'Login berhasil.');
                } else {
        
                    $data['error'] = 'Alamat email atau kata sandi salah.';
                }
            } else {
            
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
