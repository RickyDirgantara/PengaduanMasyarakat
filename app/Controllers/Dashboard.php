<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ComplaintModel;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        helper('url');
        $userModel = new UserModel();
        $complaintModel = new ComplaintModel();

        $data['users'] = $userModel->findAll();
        $data['complaints'] = $complaintModel->findAll();

        // Mendapatkan segment URI pertama
        $segment = current_url(true)->getSegment(1);

        // Set variabel yang menunjukkan status aktif
        $data['isActiveDashboard'] = ($segment == 'dashboard');
        $data['isActiveComplaints'] = ($segment == 'complaints');
        $data['isActiveFollowUps'] = ($segment == 'followUps');

        return view('admin/dashboard', $data);
    }
    
    public function editUser($id)
    {
        // Cek apakah pengguna adalah operator
        if (session()->get('role') == 'Operator') {
            return redirect()->to('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);
        return view('admin/edit_user', $data);
    }

    public function updateUser()
    {
        // Cek apakah pengguna adalah operator
        if (session()->get('role') == 'Operator') {
            return redirect()->to('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        // Proses update user (Update)
        if ($this->request->getMethod() === 'post') {
            $id = $this->request->getPost('user_id');
            
            $data = [];
    
            if ($this->request->getPost('Nama') != '') {
                $data['Nama'] = $this->request->getPost('Nama');
            }
    
            if ($this->request->getPost('AlamatEmail') != '') {
                $data['AlamatEmail'] = $this->request->getPost('AlamatEmail');
            }
    
            if ($this->request->getPost('StatusAktif') != '') {
                $data['StatusAktif'] = $this->request->getPost('StatusAktif') == 'Aktif' ? 1 : 0;
            }
    
            // Check if there is data and id before updating
            if (!empty($data) && !empty($id)) {
                $userModel = new UserModel();
                $userModel->update($id, $data);
    
                return redirect()->to('/dashboard')->with('success', 'User berhasil diupdate.');
            } else {
                return redirect()->to('/dashboard')->with('error', 'Tidak ada data atau id untuk diupdate.');
            }
        }
    }
    
    public function deleteUser($id)
    {
        if (session()->get('role') == 'Operator') {
            return redirect()->to('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        $userModel = new UserModel();
        $userModel->delete($id);

        return redirect()->to('/dashboard')->with('success', 'User berhasil dihapus.');
    }
}
