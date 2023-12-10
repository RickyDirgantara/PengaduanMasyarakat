<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\ChatModel;
use App\Models\ComplaintModel;
use App\Models\AuthModel;

class AdminChat extends BaseController
{
    public function viewAdminUserChat($complaintID = null)
    {
        $userModel = new UserModel();
        $complaintModel = new ComplaintModel();
        $chatModel = new ChatModel();
        $adminModel = new AuthModel();
        
        // Assume you have the admin and user IDs stored in the session
        $adminID = session()->get('admin_id');
        $userID = session()->get('user_id');
        $user = $userModel->find($userID);
        $admin = $adminModel->find($adminID);
    
        $users = $userModel->findAll(); 
        $complaints = $complaintModel->findAll();
        
        // Memastikan complaint_id dikirimkan ke tampilan
        $data['complaint_id'] = $complaintID;
    
        // Mendapatkan pesan sesuai dengan complaint_id
        $chats = $chatModel->getChatByComplaint($complaintID);

    
        // Menambahkan data lainnya yang ingin Anda kirim ke tampilan
        $data['user_id'] = $userID;
        $data['admin_id'] = $adminID;
        $data['users'] = $users;
        $data['complaints'] = $complaints;
        $data['user'] = $user;
        $data['chat'] = $chats;
    
        return view('admin/ChatAdmin', $data);
    }
    

    public function sendAdminUserMessage($complaintID)
    {
        
    $complaintID = $this->request->getPost('complaint_id');
    $senderIDAdmin = session()->get('admin_id');
    $senderIDUser = $this->request->getPost('sender_id_user');
    $receiverIDAdmin = $this->request->getPost('receiver_id_admin');
    $receiverIDUser = $this->request->getPost('receiver_id_user');
    $message = $this->request->getPost('message');
        echo "Sender ID Admin: $senderIDAdmin";
    
        $chatModel = new ChatModel();
    
        // Assuming you have a method in ChatModel to save messages
        $chatModel->addChatMessage($complaintID, $senderIDAdmin, $senderIDUser, $receiverIDAdmin, $receiverIDUser, $message);
    
        // Redirect back to the chat view
        return redirect()->to('chats/'.$complaintID)->with('success', 'Message sent successfully');
    }

    public function AdminUserChat($complaintID)
    {
        $userModel = new UserModel();
        $complaintModel = new ComplaintModel();
        $chatModel = new ChatModel();
        $adminModel = new AuthModel();
    
        // Assume you have the admin and user IDs stored in the session
        $adminID = session()->get('admin_id');
        $userID = session()->get('user_id');
        $user = $userModel->find($userID);
        $admin = $adminModel->find($adminID);

        $users = $userModel->findAll(); 
        $chats = $chatModel->getChatByComplaint($complaintID);
        $complaints = $complaintModel->findAll();
        $admin = $adminModel->find($complaintID);
        
        return view('admin/Chats', [
            'chats' => $chats,
            'complaint_id' => $complaintID,
            'complaintID' => $complaintID,
            'user_id' => $userID,
            'admin_id' => $adminID,
            'users' => $users,
            'complaints' => $complaints,
            'user' => $user,
        ]);
    }
}
