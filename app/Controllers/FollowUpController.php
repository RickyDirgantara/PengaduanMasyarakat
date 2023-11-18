<?php

namespace App\Controllers;

use App\Models\FollowUpModel;

class FollowUpController extends BaseController
{
    public function index()
    {
        $followUpModel = new FollowUpModel();
        $data['followUps'] = $followUpModel->findAll();

        return view('admin/FollowUps', $data);
    }

    public function create($complaintID)
    {
        $data['complaintID'] = $complaintID;

        return view('admin/create', $data);
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'TanggalTindakLanjut' => 'required',
            'DeskripsiTindakLanjut' => 'required',
            'ComplaintID' => 'required|numeric',
        ]);

        if ($validation->withRequest($this->request)->run()) {
            // Tangani penyimpanan data follow-up dari form
            $followUpModel = new FollowUpModel();
            $followUpModel->save([
                'TanggalTindakLanjut' => $this->request->getPost('TanggalTindakLanjut'),
                'DeskripsiTindakLanjut' => $this->request->getPost('DeskripsiTindakLanjut'),
                'ComplaintID' => $this->request->getPost('ComplaintID'),
            ]);

            return redirect()->to('admin/FollowUps')->with('success', 'Tindak lanjut berhasil dibuat.');
        } else {
            // Validasi gagal, kembalikan dengan pesan kesalahan
            return redirect()->to("admin/{$this->request->getPost('ComplaintID')}")->with('error', $validation->getErrors());
        }
    }
}
