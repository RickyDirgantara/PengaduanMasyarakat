<?php

namespace App\Controllers;

use App\Models\ComplaintModel;

class ComplaintsUser extends BaseController
{
    public function index()
    {
        $data = [];
        $uri = service('uri');
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
        $complaintModel = new ComplaintModel();
        $data['complaints'] = $complaintModel->getUserComplaints(session()->get('user_id'));

        return view('complaintsUser', $data);
    }
}