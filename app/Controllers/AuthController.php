<?php

namespace App\Controllers;
use App\Models\NotificationModel;
use App\Models\UserModel;
use CodeIgniter\Controller;
class AuthController extends Controller
{
    protected $validator;

    public function __construct()
    {
        $this->validator = \Config\Services::validation();
    }

    public function login()
    {
         $notificationModel = new NotificationModel();
         $data['notifications'] = $notificationModel->getNotifications(session()->get('user_id'));

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
        
                    return redirect()->to('/')->with('error', 'Username Password Tidak Cocok');
                }
            } else {
            
                $data['validation'] = $validation;
            }
        }
    }
    
    public function register()
    {
        $data = [];
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'Nama' => 'required',
                'AlamatEmail' => 'required|valid_email|is_unique[Users.AlamatEmail]',
                'KataSandi' => 'required|min_length[6]',
            ]);

            if ($validation->withRequest($this->request)->run()) {
                $userModel = new UserModel();

                $userData = [
                    'Nama' => $this->request->getPost('Nama'),
                    'AlamatEmail' => $this->request->getPost('AlamatEmail'),
                    'KataSandi' => password_hash($this->request->getPost('KataSandi'), PASSWORD_DEFAULT),
                    'StatusAktif' => true, // Sesuaikan dengan kebutuhan
                ];

                $userModel->insert($userData);

                return redirect()->to('/')->with('success', 'Registrasi berhasil. Silakan login.');
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
