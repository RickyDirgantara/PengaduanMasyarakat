<?php

namespace App\Models;

use CodeIgniter\Model;

class ChatModel extends Model
{
    protected $table = 'chat_messages';
    protected $primaryKey = 'id';
    protected $allowedFields = ['complaint_id', 'sender_id_admin', 'sender_id_user', 'receiver_id_admin', 'receiver_id_user', 'message', 'created_at'];

    // Method to get messages between admin and user
    public function getAdminUserChat($complaintID, $adminID, $userID)
{
    return $this->where('complaint_id', $complaintID)
        ->groupStart()
            ->whereIn('sender_id_admin', [$adminID])
            ->whereIn('receiver_id_user', [$userID])
        ->groupEnd()
        ->orGroupStart()
            ->whereIn('sender_id_user', [$userID])
            ->whereIn('receiver_id_admin', [$adminID])
        ->groupEnd()
        ->orderBy('created_at', 'asc')
        ->findAll();
}

    // Method to add a chat message
    public function addChatMessage($complaintID, $senderIDAdmin, $senderIDUser, $receiverIDAdmin, $receiverIDUser, $message)
    {
        $data = [
            'complaint_id' => $complaintID,
            'sender_id_admin' => $senderIDAdmin,
            'sender_id_user' => $senderIDUser,
            'receiver_id_admin' => $receiverIDAdmin,
            'receiver_id_user' => $receiverIDUser,
            'message' => $message,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->insert($data);
    }

    public function getChatByComplaint($complaintID)
    {
        return $this->where('complaint_id', $complaintID)
            ->orderBy('created_at', 'asc')
            ->findAll();
    }
}
