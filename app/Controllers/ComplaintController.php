<?php

namespace App\Controllers;

use App\Models\ComplaintModel;

class ComplaintController extends BaseController
{
    public function index()
    {
        $complaintModel = new ComplaintModel();
        $data['complaints'] = $complaintModel->findAll();

        return view('admin/complaints', $data);
    }

    public function create()
    {
        // Tampilkan form untuk membuat complaint
        return view('admin/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'JudulPengaduan' => 'required',
            'DeskripsiPengaduan' => 'required',
            'StatusPengaduan' => 'required|in_list[Dalam Proses,Selesai,Ditutup]',
            'PrioritasPengaduan' => 'required|in_list[Tinggi,Sedang,Rendah]',
        ]);

        if ($validation->withRequest($this->request)->run()) {
            // Tangani penyimpanan data complaint dari form
            $complaintModel = new ComplaintModel();
            $complaintModel->save([
                'JudulPengaduan' => $this->request->getPost('JudulPengaduan'),
                'DeskripsiPengaduan' => $this->request->getPost('DeskripsiPengaduan'),
                'TanggalPengaduan' => date('Y-m-d'), // Tanggal otomatis
                'StatusPengaduan' => $this->request->getPost('StatusPengaduan'),
                'PrioritasPengaduan' => $this->request->getPost('PrioritasPengaduan'),
                'UserID' => session()->get('user_id'), // Ambil ID pengguna dari sesi
            ]);

            return redirect()->to('admin/complaints')->with('success', 'Complaint berhasil dibuat.');
        } else {
            // Validasi gagal, kembalikan dengan pesan kesalahan
            return redirect()->to('admin/create')->with('error', $validation->getErrors());
        }
    }

    public function edit($id)
    {
        // Tampilkan form untuk mengedit complaint dengan ID tertentu
        $complaintModel = new ComplaintModel();
        $data['complaint'] = $complaintModel->find($id);

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'JudulPengaduan' => 'required',
            'DeskripsiPengaduan' => 'required',
            'StatusPengaduan' => 'required|in_list[Dalam Proses,Selesai,Ditutup]',
            'PrioritasPengaduan' => 'required|in_list[Tinggi,Sedang,Rendah]',
        ]);

        if ($validation->withRequest($this->request)->run()) {
            // Tangani pembaruan data complaint dari form
            $complaintModel = new ComplaintModel();
            $complaintModel->update($id, [
                'JudulPengaduan' => $this->request->getPost('JudulPengaduan'),
                'DeskripsiPengaduan' => $this->request->getPost('DeskripsiPengaduan'),
                'StatusPengaduan' => $this->request->getPost('StatusPengaduan'),
                'PrioritasPengaduan' => $this->request->getPost('PrioritasPengaduan'),
            ]);

            return redirect()->to('complaints')->with('success', 'Complaint berhasil diperbarui.');
        } else {
            // Validasi gagal, kembalikan dengan pesan kesalahan
            return redirect()->to("admin/edit/$id")->with('error', $validation->getErrors());
        }
    }

    public function delete($id)
    {
        // Hapus complaint dengan ID tertentu
        $complaintModel = new ComplaintModel();
        $complaintModel->delete($id);

        return redirect()->to('complaints')->with('success', 'Complaint berhasil dihapus.');
    }
}
