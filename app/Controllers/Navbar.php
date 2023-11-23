<?php

namespace App\Controllers;

use App\Models\NotificationModel;

class Navbar extends Controller
{

    public function index()
    {
        $notificationModel = new NotificationModel();
        $data['notifications'] = $notificationModel->getNotifications(session()->get('user_id'));
        return view('layouts/navbar', $data); 
    }
}
