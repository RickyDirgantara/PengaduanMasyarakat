<?php

namespace App\Models;

use CodeIgniter\Model;

class NotificationModel extends Model
{
    protected $table = 'Notifications';
    protected $primaryKey = 'notification_id';
    protected $allowedFields = ['user_id', 'message', 'is_read', 'created_at'];

    public function addNotification($userId, $message)
    {
        return $this->insert([
            'user_id' => $userId,
            'message' => $message,
            'is_read' => false, // Notifikasi baru belum dibaca
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function getNotifications($userId)
{
    return $this->where('user_id', $userId)->findAll();
}
}
