<?php

namespace App\Controllers;
use App\Models\NotificationModel;
use App\Models\ChatModel;
use App\Models\ComplaintModel;
class Index extends BaseController
{    
    public function index(): string
    {
    
        $notificationModel = new NotificationModel();
        $data['notifications'] = $notificationModel->getNotifications(session()->get('user_id'));
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
    
        return view('index', $data);
    }
    
}
