<?php

namespace App\Controllers;
use App\Models\NotificationModel;
class Panduan extends BaseController
{
    public function index(): string
    {
        $notificationModel = new NotificationModel();
        $data['notifications'] = $notificationModel->getNotifications(session()->get('user_id'));

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

        return view('panduan', $data);
    }
}
