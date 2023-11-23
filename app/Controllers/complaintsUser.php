<?php

namespace App\Controllers;

use App\Models\ComplaintModel;

class ComplaintsUser extends BaseController
{
    public function index()
    {
        $complaintModel = new ComplaintModel();
        $data['complaints'] = $complaintModel->getUserComplaints(session()->get('user_id'));

        return view('complaintsUser', $data);
    }
}