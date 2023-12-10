<?php

namespace App\Controllers;

use App\Models\ComplaintModel;
use App\Models\ChatModel;
use App\Models\AuthModel;
use App\Models\UserModel;


class ChatController extends BaseController
{
    public function viewChat($complaintID = null)
    {
        helper('url');
        $userModel = new UserModel();
        $complaintModel = new ComplaintModel();
        $chatModel = new ChatModel();
        $adminModel = new AuthModel();
    
        // Assume you have the admin and user IDs stored in the session
        $adminID = session()->get('admin_id');
        $userID = session()->get('user_id');
        $user = $userModel->find($userID);
        $admin = $adminModel->find($adminID);
        $admins = $adminModel->findAll();
        $users = $userModel->findAll(); 
        $chats = $chatModel->getChatByComplaint($complaintID);
        $complaints = $complaintModel->findAll();
        $admin = $adminModel->find($complaintID);
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
    $data['chats'] = $chats;
    $data['complaint_id'] = $complaintID;
    $data['complaintID'] = $complaintID;
    $data['user_id'] = $userID;
    $data['admin_id'] = $adminID;
    $data['users'] = $users;
    $data['admins'] = $admins;
    $data['admin'] = $admin;
    $data['complaints'] = $complaints;
    $data['user'] = $user;

    return view('chatsUser', $data);
}

    public function sendMessage()
    {
    $complaintID = $this->request->getPost('complaint_id');
    $senderIDUser = session()->get('user_id');
    $senderIDAdmin = $this->request->getPost('sender_id_admin');
    $receiverIDAdmin = $this->request->getPost('receiver_id_admin');
    $receiverIDUser = $this->request->getPost('receiver_id_user');
    $message = $this->request->getPost('message');
        echo "Sender ID User: $senderIDUser";
    
        $chatModel = new ChatModel();
    
        // Assuming you have a method in ChatModel to save messages
        $chatModel->addChatMessage($complaintID, $senderIDAdmin, $senderIDUser, $receiverIDAdmin, $receiverIDUser, $message);
        return redirect()->to('chatsUser/'.$complaintID)->with('success', 'Message sent successfully');
    }


    public function chatLists()
{
    $userModel = new UserModel();
    $complaintModel = new ComplaintModel();
    $chatModel = new ChatModel();
    $adminModel = new AuthModel();
    
    // Assume you have the admin and user IDs stored in the session
    $adminID = session()->get('admin_id');
    $userID = session()->get('user_id');

    $admin = $adminModel->find($adminID);
    $complaints = $complaintModel->findAll();
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
    $data['user_id'] = $userID;
    $data['isLoggedIn'] = session()->get('user_id') ? true : false;
    $data['admin_id'] = $adminID;     
    $data['complaints'] = $complaints;

    return view('chatLists', $data);
}
}
